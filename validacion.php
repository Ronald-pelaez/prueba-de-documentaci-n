<?php

/**
 * @OA\Info(
 *     title="API de Ejemplo",
 *     version="1.0.0",
 *     description="Esta es la documentación de la API de ejemplo."
 * )
 */

/**
 * @OA\PathItem(
 *     path="/api/v1/recurso",
 *     @OA\Post(
 *         summary="Crear recurso",
 *         description="Este endpoint permite crear un nuevo recurso.",
 *         tags={"Recursos"},
 *         @OA\RequestBody(
 *             required=true,
 *             @OA\JsonContent(
 *                 required={"nombre", "descripcion"},
 *                 @OA\Property(property="nombre", type="string", example="Nombre del recurso"),
 *                 @OA\Property(property="descripcion", type="string", example="Descripción del recurso")
 *             )
 *         ),
 *         @OA\Response(
 *             response=201,
 *             description="Recurso creado exitosamente",
 *             @OA\JsonContent(
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="nombre", type="string", example="Nombre del recurso"),
 *                 @OA\Property(property="descripcion", type="string", example="Descripción del recurso")
 *             )
 *         ),
 *         @OA\Response(
 *             response=400,
 *             description="Solicitud incorrecta",
 *             @OA\JsonContent(
 *                 type="object",
 *                 @OA\Property(property="error", type="string", example="Datos inválidos")
 *             )
 *         )
 *     )
 */

echo "Puedo entrar";
