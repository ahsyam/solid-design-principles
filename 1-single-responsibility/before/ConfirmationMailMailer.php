<?php
class ConfirmationMailMailer
{
    private $templating;
    private $translator;
    private $mailer;
    public function __construct(
        TemplatingEngineInterface $templating,
        TranslatorInterface $translator,
        MailerInterface $mailer
    ) {
        $this->templating = $templating;
        $this->translator = $translator;
        $this->mailer = $mailer;
    }
    public function sendTo(User $user): void
    {
        $message = $this->createMessageFor($user);
        $this->sendMessage($message);
    }
    private function createMessageFor(User $user): Message
    {
        $subject = $this
            ->translator
            ->translate('Confirm your mail address');
        $body = $this
            ->templating
            ->render('confirmationMail.html.tpl', [
                'confirmationCode' => $user->getConfirmationCode()
            ]);
        $message = new Message($subject, $body);
        $message->setTo($user->getEmailAddress());
        return $message;
    }

    private function sendMessage(Message $message): void
    {
        $this->mailer->send($message);
    }
}