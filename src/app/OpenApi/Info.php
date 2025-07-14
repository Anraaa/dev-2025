<?php

namespace App\OpenApi;

/**
 * @OA\Info(
 *     title="My API",
 *     version="1.0.0",
 *     description="API konyol anjg gua uda cape pls lah",
 *     termsOfService="https://dev.test/terms",
 *     @OA\Contact(
 *         name="API Support",
 *         email="support@example.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *
 * @OA\Server(
 *     url="https://dev.test",
 *     description="Local API Server"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="ApiKeyAuth",
 *     type="apiKey",
 *     in="header",
 *     name="X-API-KEY"
 * )
 */
class Info {}
