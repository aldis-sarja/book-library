<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::factory()->create([
            'title' => 'Lopkautuve Nr.5',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Galapagu salas',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Kaķa šūpulis',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Līķu Pēteris',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Laikatrīce',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Armagedons atskatoties',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Ietupinātais',
            'author' => 'Kurts Vonnegūts',
        ]);
        Book::factory()->create([
            'title' => 'Fuko svārsts',
            'author' => 'Umberto Eko',
        ]);
        Book::factory()->create([
            'title' => 'Prāgas kapsēta',
            'author' => 'Umberto Eko',
        ]);
        Book::factory()->create([
            'title' => 'Rozes vārds',
            'author' => 'Umberto Eko',
        ]);
        Book::factory()->create([
            'title' => 'Bodolīno',
            'author' => 'Umberto Eko',
        ]);
        Book::factory()->create([
            'title' => 'Pulkvedim neviens neraksta',
            'author' => 'Gabriels Garsija Markess',
        ]);
        Book::factory()->create([
            'title' => 'Simts vientulības gadu',
            'author' => 'Gabriels Garsija Markess',
        ]);
        Book::factory()->create([
            'title' => 'Nestundā',
            'author' => 'Gabriels Garsija Markess',
        ]);
        Book::factory()->create([
            'title' => 'Doktors Fausts',
            'author' => 'Tomass Manns',
        ]);
        Book::factory()->create([
            'title' => 'Burvju kalns',
            'author' => 'Tomass Manns',
        ]);
        Book::factory()->create([
            'title' => 'Mīts par mūžīgo atgriežšanos',
            'author' => 'Mirča Eliade',
        ]);
        Book::factory()->create([
            'title' => 'Jāzeps un viņa brāļi',
            'author' => 'Tomass Manns',
        ]);
        Book::factory()->create([
            'title' => 'Viltus Nerons',
            'author' => 'Lions Feihtvangers',
        ]);
        Book::factory()->create([
            'title' => 'Meistars un Margarita',
            'author' => 'Mihails Bulgakovs',
        ]);
        Book::factory()->create([
            'title' => 'Suņa sirds',
            'author' => 'Mihails Bulgakovs',
        ]);
        Book::factory()->create([
            'title' => 'Ardievas ieročiem',
            'author' => 'Ernests Hemingvejs',
        ]);
        Book::factory()->create([
            'title' => 'Kam ir un kam nav',
            'author' => 'Ernests Hemingvejs',
        ]);
        Book::factory()->create([
            'title' => 'Kam skanēs zvans',
            'author' => 'Ernests Hemingvejs',
        ]);
    }
}
