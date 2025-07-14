<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Test",
 *     title="Test",
 *     type="object",
 *     required={"id", "name"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Sample Test"),
 *     @OA\Property(property="description", type="string", example="This is a test record."),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2024-01-01T00:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2024-01-01T00:00:00Z")
 * )
 */
class Test {}
