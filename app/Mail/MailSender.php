<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\LaravelDriver\MailerSendTrait;

abstract class MailSender extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;

    public function build(): self
    {
        return $this
            ->from('noreply@english-academy.space', 'English Course')
            ->view('emails.blank')
            ->mailersend(
                template_id: $this->getTemplateId(),
                personalization: $this->getPersonalization()
            );
    }

    abstract public function getTemplateId(): string;

    abstract public function getPersonalization(): array;
}
