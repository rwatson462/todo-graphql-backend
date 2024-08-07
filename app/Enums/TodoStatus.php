<?

namespace App\Enums;

enum TodoStatus: string {
    case New = 'new';
    case Complete = 'complete';
    case Cancelled = 'cancelled';
}