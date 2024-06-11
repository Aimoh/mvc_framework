<?php

namespace app\core\form;

class TextareaField extends BaseField
{

    #[\Override] public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}