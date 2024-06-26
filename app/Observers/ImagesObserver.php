<?php

namespace App\Observers;

use App\Models\Images;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Storage;

class ImagesObserver implements ShouldHandleEventsAfterCommit
{
    /**
     * Handle the Image "created" event.
     */
    public function created(Images $image): void
    {
        //
    }

    /**
     * Handle the Image "updated" event.
     */
    public function updated(Images $image): void
    {
        //
    }

    /**
     * Handle the Image "deleted" event.
     */
    public function deleted(Images $image): void
    {
        Storage::delete($image->url);
    }

    /**
     * Handle the Image "restored" event.
     */
    public function restored(Images $image): void
    {
        //
    }

    /**
     * Handle the Image "force deleted" event.
     */
    public function forceDeleted(Images $image): void
    {
        //
    }
}
