<?php

class ConfirmationMailFactory {
    private $templating;
    private $translator;

    public function __construct(
        TemplatingEngineInterface $templating,
        TranslatorInterface $translator
    ) {
        $this->templating = $templating;
        $this->translator = $translator;
    }
    public function createMessageFor(User $user): Message
    {
        /*
        * Create an instance of Message based on the
        * given User
        */
        $message = '';
        return $message;
    }
}