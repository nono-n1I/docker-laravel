<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [   'title' => 'オブジェクト指向でなぜつくるのか',
                'author' => '平澤章',
                'publish_date' => '2004-6-28',
                'page_count' => 365,
                'image_link' => "http://books.google.com/books/content?id=uZDvtgAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api",
                'status' => 'a'],
            [   'title' => '恋するコンピュータ',
                'author' => '黒川伊保子',
                'publish_date' => '1998-2-25',
                'page_count' => 205,
                'image_link' => "http://books.google.com/books/content?id=9PW4PQAACAAJ&printsec=frontcover&img=1&zoom=5&source=gbs_api",
                'status' => 'b'],
        ];
        foreach($books as $book) {
            \App\Book::create($book);
        }
    }
}
