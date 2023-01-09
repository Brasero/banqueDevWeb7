<?php

class FormBuilder
{
    private string $form;

    public function __construct(string $method, string $action, string $class = 'form')
    {
        $this->form = "<form method='$method' action='$action' class='$class'>";
    }

    public function input(string $type, string $name, string $label = null): FormBuilder{
        if (!is_null($label)) {
            $this->label($label, $name);
        }
        $this->form .= "<input type='$type' name='$name' id='$name' />";

        return $this;
    }

    public function submit(string $value): FormBuilder {
        $this->form .= "<input type='submit' value='$value' />";
        return $this;
    }

    public function getForm(): string {
        $this->form .= "</form>";
        return $this->form;
    }

    private function label($label, $id) {
        $this->form .= "<label for='$id'>$label</label>";
    }

}