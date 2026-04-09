<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('authenticated user can create a task', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('tasks.store'), [
        'title' => 'Finish assessment',
        'description' => 'Build full task manager',
        'status' => 'pending',
        'priority' => 'high',
        'due_date' => '2026-04-10',
    ]);

    $response->assertRedirect(route('dashboard'));
    $response->assertSessionHas('success', 'Task created successfully.');

    $this->assertDatabaseHas('tasks', [
        'user_id' => $user->id,
        'title' => 'Finish assessment',
        'status' => 'pending',
        'priority' => 'high',
    ]);
});

test('task title is required', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('tasks.store'), [
        'title' => '',
        'description' => 'Test description',
        'status' => 'pending',
        'priority' => 'medium',
        'due_date' => '2026-04-10',
    ]);

    $response->assertSessionHasErrors(['title']);
});

test('authenticated user can update own task', function () {
    $user = User::factory()->create();

    $task = Task::factory()->create([
        'user_id' => $user->id,
        'title' => 'Old Title',
    ]);

    $response = $this->actingAs($user)->put(route('tasks.update', $task->id), [
        'title' => 'Updated Title',
        'description' => 'Updated description',
        'status' => 'completed',
        'priority' => 'low',
        'due_date' => '2026-04-15',
    ]);

    $response->assertRedirect(route('dashboard'));
    $response->assertSessionHas('success', 'Task updated successfully.');

    $this->assertDatabaseHas('tasks', [
        'id' => $task->id,
        'title' => 'Updated Title',
        'status' => 'completed',
        'priority' => 'low',
    ]);
});

test('authenticated user can delete own task', function () {
    $user = User::factory()->create();

    $task = Task::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = $this->actingAs($user)->delete(route('tasks.destroy', $task->id));

    $response->assertRedirect(route('dashboard'));
    $response->assertSessionHas('success', 'Task deleted successfully.');

    $this->assertDatabaseMissing('tasks', [
        'id' => $task->id,
    ]);
});

test('user cannot edit another users task', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $task = Task::factory()->create([
        'user_id' => $otherUser->id,
    ]);

    $response = $this->actingAs($user)->get(route('tasks.edit', $task->id));

    $response->assertNotFound();
});

test('user cannot update another users task', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $task = Task::factory()->create([
        'user_id' => $otherUser->id,
        'title' => 'Original Title',
    ]);

    $response = $this->actingAs($user)->put(route('tasks.update', $task->id), [
        'title' => 'Hacked Title',
        'description' => 'Hacked description',
        'status' => 'completed',
        'priority' => 'high',
        'due_date' => '2026-04-20',
    ]);

    $response->assertNotFound();

    $this->assertDatabaseHas('tasks', [
        'id' => $task->id,
        'title' => 'Original Title',
    ]);
});

test('user cannot delete another users task', function () {
    $user = User::factory()->create();
    $otherUser = User::factory()->create();

    $task = Task::factory()->create([
        'user_id' => $otherUser->id,
    ]);

    $response = $this->actingAs($user)->delete(route('tasks.destroy', $task->id));

    $response->assertNotFound();

    $this->assertDatabaseHas('tasks', [
        'id' => $task->id,
    ]);
});
