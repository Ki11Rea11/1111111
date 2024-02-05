<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Telegram\Bot\Laravel\Facades\Telegram;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
//    public function handle(Request $request):void
//    {
//        // Получение всех обновлений
//        $updates = Telegram::getUpdates();
//
//        // Обработка каждого обновления
//        foreach ($updates as $update) {
//            $message = $update->getMessage();
//
//            // Проверка, есть ли текст в сообщении
//            if ($message && $text = $message->getText()) {
//                // Реализуйте здесь вашу логику обработки текста сообщения
//                // Например, выведем текст сообщения в лог Laravel
//                \Illuminate\Support\Facades\Log::info('Received message: ' . $text);
//            }
//
//            // Дополнительная логика обработки других типов обновлений, если необходимо
//        }
//
//        // Отправка подтверждения успешного получения обновлений
//        Telegram::commandsHandler(true);
//
//    }
    public function checkBotConnection():View
    {
      return view('admin.bot');
    }
}
