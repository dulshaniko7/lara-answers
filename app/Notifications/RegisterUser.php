<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class RegisterUser extends Notification
{
    use Queueable;

    public $question;
    public $answer;
    public $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($answer,$question,$name)
    {
        //
	    $this->question = $question;
	    $this->answer = $answer;
	    $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new answer was submitted to your question about' . $this->question->title)
		        ->line($this->answer)
                    ->action('View all answers', route('questions.show',$this->question->id))
                    ->line('Thank you for using our application!');
    }
	public function toNexmo($notifiable)
	{
		return (new NexmoMessage)
				->content('A new answer was submitted to your question about' . $this->question->title);
	}

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
