<?php

namespace App;

enum TodoStatus
{
    case NotStarted;
    case InProgress;
    case Done;

    public function toDbValue(): string
    {
        return match ($this) {
            self::NotStarted => 'belum',
            self::InProgress => 'sedang',
            self::Done => 'selesai',
        };
    }

    public static function fromDbValue(string $value): self
    {
        return match ($value) {
            'belum' => self::NotStarted,
            'sedang' => self::InProgress,
            'selesai' => self::Done,
            default => throw new \InvalidArgumentException("Invalid value: $value"),
        };
    }

    public function toHumanReadable(): string
    {
        return match ($this) {
            self::NotStarted => 'Not Started',
            self::InProgress => 'In Progress',
            self::Done => 'Done',
        };
    }
}
