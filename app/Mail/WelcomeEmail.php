<?php
declare(strict_types=1);

namespace App\Mail;

use Illuminate\Support\Arr;
use MailerSend\Helpers\Builder\Personalization;

/**
 * Class WelcomeEmail
 *
 * @package App\Mail
 */
class WelcomeEmail extends MailSender
{
    public function __construct(
        public string $contact_organisation,
        public string $contact_country,
        public string $contact_website,
        public string $contact_email,
        public string $contact_firstname,
        public string $contact_role,
        public string $contact_lastname,
        public string $contact_number_students,
    ) {}

    public function getTemplateId(): string
    {
        return 'z86org8y6y0lew13';
    }

    public function getPersonalization(): array
    {
        $to = Arr::get($this->to, '0.address');

        return [
            new Personalization($to, [
                'firstname' => $this->contact_firstname,
                'lastname' => $this->contact_lastname,
                'email' => $this->contact_email,
                'contact_organisation' => $this->contact_organisation,
                'contact_country' => $this->contact_country,
                'contact_website' => $this->contact_website,
                'contact_role' => $this->contact_role,
                'contact_number_students' => $this->contact_number_students,
            ]),
        ];
    }
}
