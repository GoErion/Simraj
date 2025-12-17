<?php

namespace App\Action;

use App\Models\Forum;

class CreateTopic
{
    public function handle(array $userData,$userId)
    {
        return Forum::create([
            'user_id' => $userId,
            'topic' => $userData['topic'],
            'content' => $userData['content'],
        ]);
    }
}
