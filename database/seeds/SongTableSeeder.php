<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Song;
use App\Models\Artist;

class SongTableSeeder extends Seeder {

  public function run()
  {
    // Allow mass assignment.
    Eloquent::unguard();
    // Delete all data.
    DB::table('songs')->delete();

    // Get all artists with albums
    $artists = Artist::with('album')->get();
    foreach ($artists as $artist) {
      switch ($artist->slug) {
        case 'dr_dre':
          foreach ($artist->album as $album) {
            if ($album->slug == 'the_chronic') {

            }
            if ($album->slug == '2001') {
              Song::create(
                array(
                  'title' => 'Still D.R.E',
                  'lyrics' => "
[Snoop]
Still Snoop Dogg and D-R-E (Guess who's back)
Still, still doing that shit, huh Dre?
Oh for sure, check me out

[Dr. Dre]
It's still Dre Day nigga, A.K. nigga
Before I chrome the lot, can't keep it home a lot
'cause when I frequent the spots that I'm known to rock
You hear the bass from the trunk when I'm on the block
Ladies, they pay homage, but haters say Dre fell off
How nigga My last album was 'The Chronic'
They want to know if he still got it
They say rap's changed, they want to know how I feel about it

[Snoop - singing]
If you ain't up on pace

[Dr. Dre]
Dr. Dre is the name, I'm ahead of my game
Still, puffing my leafs, still fuck with the beats
Still not loving police (Uh huh)
Still rock my khakis with a cuff and a crease
Still got love for the streets, repping 213
Still the beat bangs, still doing my thang
Since I left, ain't too much changed, still

[Chorus:]
[Snoop Dogg]
I'm representing for the gangsters all across the world
Still hitting them corners in them low low's girl
[Dr. Dre]
Still taking my time to perfect the beat
And I still got love for the streets, it's the D-R-E [Repeat 2x]

Since the last time you heard from me I lost some friends
Well, hell, me and Snoop, we dipping again
Kept my ear to the streets, signed Eminem
He's triple platinum, doing 50 a week
Still, I stay close to the heat
And even when I was close to defeat, I rose to my feet
My life's like a soundtrack I wrote to the beat
Treat rap like Cali weed, I smoke till I sleep
Wake up in the A.M., compose a beat
I bring the fire till you're soaking in your seat
It's not a fluke, it's been tried, I'm the troop
It's 'Turn Out the Lights' from the World Class Wreckin' Cru
I'm still at it, After-mathematics
In the home of drive-by's and ak-matics
Swap meets, sticky green, and bad traffic
I dip through then I get skin, D-R-E

[Chorus]

It ain't nothing but more hot shit
Another classic CD for y'all to vibe with
Whether you're cooling on a corner with your fly bitch
Laid back in the shack, play this track
I'm representing for the gangsters all across the world
(Still hitting them corners in them low low's girl)
I'll break your neck, damn near put your face in your lap
Niggas try to be the king but the ace is back

[Snoop - singing]
So if you ain't up on thangs

[Dr. Dre]
Dr. Dre be the name still running the game
Still got it wrapped like a mummy
Still ain't tripping, love to see young blacks get money
Spend time out the hood, take they moms out the hood
Hit my boys off with jobs, no more living hard
Barbeques every day, driving fancy cars
Still gonna get mine regardless

[Chorus x1.5]

[Snoop]
Right back up in ya motherfucking ass
'95 plus four pennies
Add that shit up, D-R-E right back on top of thangs
Smoke some with your dog
No stress, no seeds, no stems, no sticks!
Some of that real sticky icky icky
Ooo Wee, put it in the air
For you's a fool D.R.
",
                  'length' => '4:51',
                  'video_link' => 'https://www.youtube.com/watch?v=_CL6n0FJZpk',
                  'album_id' => $album->id,
                  'slug' => 'still_dre',
                )
              );
            }
          }
          break;
        case 'snoop_dogg':
          break;
        case 'nas':
          break;
        case 'eminem':
          break;
        case 'living_legends':
          break;
        case 'souls_of_mischief':
          break;
        case 'hieroglyphics':
          break;
        case 'optimus_rhymes':
          break;
        case 'system_of_a_down':
          break;
        case 'serj_tankian':
          break;

      }
    }
  }
}