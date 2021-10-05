<?php

    declare(strict_types=1);

    class Meal
    {
        public const SOCIETY_NAME = "TOTO";
        public const MIN_ADD = 0;

        public function __construct(public string $society_name = self::SOCIETY_NAME){}

        public static int $nbMeal = 0;
    }

    class Meal_data extends Meal
    {
        private const MESSAGE_ERROR_1 = "Le nom de l'entreprise doit être: " . parent::SOCIETY_NAME;
        private const MESSAGE_ERROR_2 = "La valeur doit être supérieur à: " . parent::MIN_ADD;

        public static function AddMeal($value, $name_society)
        {
            if ($name_society != parent::SOCIETY_NAME)
            {
                trigger_error(self::MESSAGE_ERROR_1);
            }
            else {
                if ($value < parent::MIN_ADD) {
                    trigger_error(self::MESSAGE_ERROR_2);
                } else {
                    parent::$nbMeal = parent::$nbMeal + $value;

                }
            }
        }
    }

    Meal_data::AddMeal(1, "TOTO");
    var_dump(Meal::$nbMeal);