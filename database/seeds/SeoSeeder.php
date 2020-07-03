<?php

use Illuminate\Database\Seeder;
use App\Seo;
class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $page_titles = [
           'Homepage',
           'singleGenre',
           'singleArtist',
           'singleProducer',
           'myMusic',
           'contact',
           'buymusic',
           'topArtists',
           'topProducers',
           'mostDownloadedSongs',
           'mostViewedSongs',
           'newSongs',
           'mostDownloadedBeats',
           'mostViewedBeats',
           'newBeats',
           'downloadedMusic',
           'login',
           'register',
           'uploadedMusicedit',
           'uploadedMusiccreate',
           'mostListenedSongs',
           'most-Listened-beats',
        ];


        foreach ($page_titles as $page_title) {
            Seo::create(['page_title' => $page_title]);
        }
    }
}
