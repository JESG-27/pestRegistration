<?php

namespace Tests\Feature;

use App\Models\Record;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class RecordControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_route()
    {
        $user = User::where('email', 'test@example.com')->first();

        $response = $this->actingAs($user)->get('/record');
        $response->assertStatus(200);
        $response->assertSeeText('Listado de registro de plagas');
    }

    public function test_user_route_create()
    {
        $user = User::where('email', 'test@example.com')->first();
        $record = [
            'crop_id' => 1,
            'pest_id' => 1,
            'location_id' => 1,
            'level' => 'Alto',
            'comment' => 'Comentario',
            'image' => UploadedFile::fake()->image('image.jpg')
        ];

        $response = $this->actingAs($user)->post('/record', $record);
        $response->assertStatus(302);

        $this->assertDatabaseHas('records', [
            'user_id' => $user->id,
            'crop_id' => 1,
            'pest_id' => 1,
            'location_id' => 1,
            'level' => 'Alto',
            'comment' => 'Comentario'
        ]);
        $response->assertRedirect('/record');
    }

    public function test_user_route_create_validation()
    {
        $user = User::where('email', 'test@example.com')->first();
        $record = [
            'crop_id' => 1,
            'pest_id' => 1,
            'location_id' => 1,
            'level' => 'Alto',
            'comment' => 'Comentario',
        ];

        $response = $this->actingAs($user)->post('/record', $record);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['image']);
        $response->assertInvalid(['image' => 'The image field is required.']);
    }

    public function test_user_delete_record()
    {
        $user = User::where('email', 'test@example.com')->first();
        $record = Record::create([
            'user_id' => $user->id,
            'crop_id' => 1,
            'pest_id' => 1,
            'location_id' => 1,
            'level' => 'Alto',
            'comment' => 'Comentario'
        ]);

        $response = $this->actingAs($user)->delete(route('record.destroy', $record->id));
        
        $this->assertSoftDeleted('records', [
            'id' => $record->id
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/record');
    }
}
