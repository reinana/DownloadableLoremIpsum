<?php

namespace Helpers;

use Faker\Factory;
use Faker\Generator;
use Models\User;

class RandomGenerator
{
    /** 共有Faker（重いので1回だけ生成） */
    private static ?Generator $faker = null;

    /** 必要になったときだけ初期化して共有 */
    private static function f(): Generator
    {
        if (self::$faker === null) {
            // ロケールは必要に応じて 'ja_JP' などに変更可
            self::$faker = Factory::create('en_US');
        }
        return self::$faker;
    }

    /**（任意）再現性が欲しいときにシード設定 */
    public static function seed(?int $seed): void
    {
        if ($seed !== null) {
            self::f()->seed($seed);
        }
    }
    public static function user(): User
    {
        $faker = self::f();

        return new User(
            $faker->randomNumber(),
            $faker->firstName(),
            $faker->lastName(),
            $faker->email,
            $faker->password,
            $faker->phoneNumber,
            $faker->address,
            $faker->dateTimeThisCentury,
            $faker->dateTimeBetween('-10 years', '+20 years'),
            $faker->randomElement(['admin', 'user', 'editor'])
        );
    }

    public static function users(int $count): array
    {
        $users = [];

        for ($i = 0; $i < $count; $i++) {
            $users[] = self::user();
        }

        return $users;
    }
}
