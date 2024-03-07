<?php

declare(strict_types=1);

namespace App\Enums;

enum CourseStatus: string
{
    case DRAFT = 'draft';
    case PENDING = 'pending';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';

    public static function values(): array
    {
        return array_map(fn (self $case): string => $case->value, self::cases());
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($case): array => [
                $case->value => ucfirst(strtolower($case->name))
            ])->toArray();
    }
}
