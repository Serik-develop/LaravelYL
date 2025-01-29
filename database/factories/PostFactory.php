<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition(): array
    {
        $names = [
            'aardvark','albatross','alligator','alpaca','ant','anteater','antelope','ape','armadillo','donkey','baboon','badger','barracuda','bat','bear','beaver','bee','bison','boar','buffalo','galago','butterfly','camel','caribou','cat','caterpillar','cattle','chamois','cheetah','chicken','chimpanzee','chinchilla','chough','clam','cobra','cockroach','cod','cormorant','coyote','crab','crane','crocodile','crow','curlew','deer','dinosaur','dog','dogfish','dolphin','donkey','dotterel','dove','dragonfly','duck','dugong','dunlin','eagle','echidna','eel','eland','elephant','elephant-seal','elk','emu','falcon','ferret','finch','fish','flamingo','fly','fox','frog','gaur','gazelle','gerbil','giant-panda','giraffe','gnat','gnu','goat','goose','goldfinch','goldfish','gorilla','goshawk','grasshopper','grouse','guanaco','guinea-fowl','guinea-pig','gull','hamster','hare','hawk','hedgehog','heron','herring','hippopotamus','hornet','horse','human','hummingbird','hyena','jackal','jaguar','jay','jay, blue','jellyfish','kangaroo','koala','komodo-dragon','kouprey','kudu','lapwing','lark','lemur','leopard','lion','llama','lobster','locust','loris','louse','lyrebird','magpie','mallard','manatee','marten','meerkat','mink','mole','monkey','moose','mouse','mosquito','mule','narwhal','newt','nightingale','octopus','okapi','opossum','oryx','ostrich','otter','owl','ox','oyster','panther','parrot','partridge','peafowl','pelican','penguin','pheasant','pig','pigeon','pony','porcupine','porpoise','prairie-dog','quail','quelea','rabbit','raccoon','rail','ram','rat','raven','red-deer','red-panda','reindeer','rhinoceros','rook','ruff','salamander','salmon','sand-dollar','sandpiper','sardine','scorpion','sea-lion','sea-urchin','seahorse','seal','shark','sheep','shrew','shrimp','skunk','snail','snake','spider','squid','squirrel','starling','stingray','stinkbug','stork','swallow','swan','tapir','tarsier','termite','tiger','toad','trout','turkey','turtle','vicuña','viper','vulture','wallaby','walrus','wasp','water-buffalo','weasel','whale','wolf','wolverine','wombat','woodcock','woodpecker','worm','wren','yak','zebra'
        ];
        $emails = ['crandall@mac.com',
        'jshearer@me.com',
        'sabren@gmail.com',
        'keutzer@aol.com',
        'studyabr@aol.com',
        'bdbrown@outlook.com',
        'sriha@comcast.net',
        'flakeg@outlook.com',
        'staffelb@mac.com',
        'treeves@live.com',
        'shazow@mac.com',
        'jusdisgi@verizon.net'];
        $random_em = array_rand($emails);
        $random_key = array_rand($names);
        return [
            'name' => $names[$random_key],
            'email' => $emails[$random_em],
            'password' => random_int(100000,999999999),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
