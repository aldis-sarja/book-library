<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\TakenBook;
use Illuminate\Support\Carbon;

class TakenBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all();
        foreach ($books as $book) {
            $timesTaken = random_int(0, 11);
            $lastTimeTaken = Carbon::now()->subWeeks(15);
            $isStillTaken = random_int(1, 5);
            for ($c = 0; $c < $timesTaken; $c++) {
                $date = Carbon::now()->subWeeks(random_int(0, 15));
                if ($date > $lastTimeTaken) {
                    $lastTimeTaken = $date;
                }
                TakenBook::factory()->create([
                    'book_id' => $book->id,
                    'date' => $date
                ]);
            }
            if ($isStillTaken == 1) {
                $book->have_taken = $lastTimeTaken;
                $book->save();
            }
        }
    }
}
