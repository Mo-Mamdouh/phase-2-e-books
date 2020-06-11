<?php

use Illuminate\Database\Seeder;

class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books =new \App\books([
            'imagePath' => 'https://m.media-amazon.com/images/I/51g0LdfhtvL.jpg',
            'title' => 'Harry Potter and the goblet of fire',
            'author' => 'J.K. Rowlin',
            'price'=> 20,
            'description'=>'There will be three tasks, spaced throughout the school year, and they will test the champions in many different ways...their magical prowess - their daring - their powers of deduction - and, of course, their ability to cope with danger.'
            ]
            );
            $books -> save();

            $books =new \App\books([
                'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81E9oNSK3bL.jpg',
                'title' => 'Fire & Blood: 300 Years Before A Game of Thrones',
                'author' => 'George R. R. Martin',
                'price'=> 16,
                'description'=>'With all the fire and fury fans have come to expect from internationally best-selling author George R. R. Martin, this is the first volume of the definitive two-part history of the Targaryens in Westeros.'
                ]
                );
                $books -> save();

                $books =new \App\books([
                    'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg',
                    'title' => 'And Then There Were None ',
                    'author' => 'Agatha christie',
                    'price'=> 2,
                    'description'=>'"Ten . . ."
                    Ten strangers are lured to an isolated island mansion off the Devon coast by a mysterious "U. N. Owen."
                    
                    "Nine . . ."
                    At dinner a recorded message accuses each of them in turn of having a guilty secret, and by the end of the night one of the guests is dead.
                    
                    '
                    ]
                    );
                    $books -> save();

                    $books =new \App\books([
                        'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg',
                        'title' => 'Murder on the Orient Express',
                        'author' => 'agatha christie',
                        'price'=> 12,
                        'description'=>'Just after midnight, the famous Orient Express is stopped in its tracks by a snowdrift. By morning, the millionaire Samuel Edward Ratchett lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Without a shred of doubt, one of his fellow passengers is the murderer.Isolated by the storm, detective Hercule Poirot must find the killer among a dozen of the dead mans enemies, before the murderer decides to strike again.'
                        ]
                        );
                        $books -> save();
                        $books =new \App\books([
                            'imagePath' => 'https://m.media-amazon.com/images/I/51g0LdfhtvL.jpg',
                            'title' => 'Harry Potter and the goblet of fire',
                            'author' => 'J.K. Rowlin',
                            'price'=> 20,
                            'description'=>'There will be three tasks, spaced throughout the school year, and they will test the champions in many different ways...their magical prowess - their daring - their powers of deduction - and, of course, their ability to cope with danger.'
                            ]
                            );
                            $books -> save();
                
                            $books =new \App\books([
                                'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81E9oNSK3bL.jpg',
                                'title' => 'Fire & Blood: 300 Years Before A Game of Thrones',
                                'author' => 'George R. R. Martin',
                                'price'=> 16,
                                'description'=>'With all the fire and fury fans have come to expect from internationally best-selling author George R. R. Martin, this is the first volume of the definitive two-part history of the Targaryens in Westeros.'
                                ]
                                );
                                $books -> save();
                
                                $books =new \App\books([
                                    'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg',
                                    'title' => 'And Then There Were None ',
                                    'author' => 'Agatha christie',
                                    'price'=> 2,
                                    'description'=>'"Ten . . ."
                                    Ten strangers are lured to an isolated island mansion off the Devon coast by a mysterious "U. N. Owen."
                                    
                                    "Nine . . ."
                                    At dinner a recorded message accuses each of them in turn of having a guilty secret, and by the end of the night one of the guests is dead.
                                    
                                    '
                                    ]
                                    );
                                    $books -> save();
                
                                    $books =new \App\books([
                                        'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg',
                                        'title' => 'Murder on the Orient Express',
                                        'author' => 'agatha christie',
                                        'price'=> 12,
                                        'description'=>'Just after midnight, the famous Orient Express is stopped in its tracks by a snowdrift. By morning, the millionaire Samuel Edward Ratchett lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Without a shred of doubt, one of his fellow passengers is the murderer.Isolated by the storm, detective Hercule Poirot must find the killer among a dozen of the dead mans enemies, before the murderer decides to strike again.'
                                        ]
                                        );
                                        $books -> save();
                
                                      
                    
                    }
                }
                      
    
    
