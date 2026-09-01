<?php

declare(strict_types=1);

namespace Liberu\CRM\ChatAndBots\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property int $bot_id
 * @property string $visitor_key
 * @property string $status
 * @property string|null $handoff_to
 */
final class ChatSession extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_chat_sessions';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['qualification' => 'array', 'transcript' => 'array'];
    }
}
