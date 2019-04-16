<?php
namespace yii\validators;

use Yii;

class StatusValidator extends Validator {

    public $possibleStatus = [
      'В очереди',
      'Назначен исполнитель',
      'В работе',
      'Выполнена',
      'Отправлена на доработку'
    ];
    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = Yii::t('yii', '{attribute} must be in array of possible statuses".');
        }
    }

    public function validateValue($value) {
        return in_array($value, $this->possibleStatus);
    }

}