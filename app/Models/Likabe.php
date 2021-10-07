<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait Likabe
{

    public function scopeWithLikes(Builder $query){
        $query->leftJoinSub(
            'select tweet_id , sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
        //left join(
        // select tweet_id , sum(liked) likes, sum(!likes) dislikes from likes group by tweet_id
        // ) likes on likes.tweet_id = tweets.id
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }

    public function like($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()],
            [
                'liked' => true
            ]);
    }

    public function dislike($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()],
            [
                'liked' => false
            ]);
    }
}
