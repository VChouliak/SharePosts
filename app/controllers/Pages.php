<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title'=>'Welcome',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque architecto nostrum porro officia modi reprehenderit quam velit ad, blanditiis laborum numquam. A fugiat tempore nihil minima atque neque error voluptates!
            m possimus dolor delectus laborum deleniti consequuntur. Fugit quos error ad, eum a dignissimos, corporis eius neque deserunt quas quam commodi obcaecati rem. Voluptatum earum delectus dolore quis consequatur.'
        ];

        $this->loadView('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title'=>'About',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque architecto nostrum porro officia modi reprehenderit quam velit ad, blanditiis laborum numquam. A fugiat tempore nihil minima atque neque error voluptates!
            m possimus dolor delectus laborum deleniti consequuntur. Fugit quos error ad, eum a dignissimos, corporis eius neque deserunt quas quam commodi obcaecati rem. Voluptatum earum delectus dolore quis consequatur.'
        ];
        $this->loadView('pages/about', $data);
    }
}
