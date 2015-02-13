<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class TestEvent extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

    public function handle($event)
    {
        echo "Event: " . get_class($event);
    }

}
