<?php

declare(strict_types=1);

namespace Modules\Blog\Actions\Banner;

use Carbon\Carbon;
use Modules\Blog\Models\Banner;
use Modules\Blog\Models\Category;

use function Safe\json_decode;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class ImportBannerFromByJsonTextAction
{
    use QueueableAction;

    public function execute(string $json_text): void
    {
        Assert::isArray($json = json_decode($json_text, true), '['.__LINE__.']['.__FILE__.']');

        foreach ($json as $j) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            $start_date = (is_array($j) ? $j['start_date'] : null) ?? '';
            if (\is_string($start_date) && mb_strlen($start_date) > 3) {
                $start_date = Carbon::parse($start_date);
            }
            $end_date = (is_array($j) ? $j['end_date'] : null);
<<<<<<< HEAD
=======
=======
            $start_date = $j['start_date'] ?? '';
            if (\is_string($start_date) && mb_strlen($start_date) > 3) {
                $start_date = Carbon::parse($start_date);
            }
            $end_date = $j['end_date'];
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            if (\is_string($end_date) && mb_strlen($end_date) > 3) {
                $end_date = Carbon::parse($end_date);
            }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            $cd = (is_array($j) ? $j['category_dict'] : null) ?? [];

            $category_data = [
                'title' => (is_array($cd) ? $cd['title'] : null) ?? '',
                'slug' => (is_array($cd) ? $cd['slug'] : null) ?? '',
<<<<<<< HEAD
=======
=======
            $cd = $j['category_dict'] ?? [];

            $category_data = [
                'title' => $cd['title'] ?? '',
                'slug' => $cd['slug'] ?? '',
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                // "in_leaderboard"=> $cd['in_leaderboard'],
                // "icon"=>$cd['icon'],
            ];
            $category_where = ['slug' => $category_data['slug']];
            $category = Category::firstOrCreate($category_where, $category_data);

            $banner_where = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                'title' => (is_array($j) ? $j['title'] : null),
                'action_text' => (is_array($j) ? $j['action_text'] : null),
            ];
            $banner_data = [
                'title' => (is_array($j) ? $j['title'] : null),
                'description' => (is_array($j) ? $j['short_description'] : null),
                'action_text' => (is_array($j) ? $j['action_text'] : null),
                'link' => (is_array($j) ? $j['link'] : null),
                'start_date' => $start_date,
                'end_date' => $end_date,
                'hot_topic' => (is_array($j) ? $j['hot_topic'] : null),
                'open_markets_count' => (is_array($j) ? $j['open_markets_count'] : null),
                'landing_banner' => (is_array($j) ? $j['landing_banner'] : null),
<<<<<<< HEAD
=======
=======
                'title' => $j['title'],
                'action_text' => $j['action_text'],
            ];
            $banner_data = [
                'title' => $j['title'],
                'description' => $j['short_description'],
                'action_text' => $j['action_text'],
                'link' => $j['link'],
                'start_date' => $start_date,
                'end_date' => $end_date,
                'hot_topic' => $j['hot_topic'],
                'open_markets_count' => $j['open_markets_count'],
                'landing_banner' => $j['landing_banner'],
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                'category_id' => $category->id,
            ];

            Banner::firstOrCreate($banner_where, $banner_data)
<<<<<<< HEAD
                ->addMediaFromUrl(is_array($j) ? (string) ($j['desktop_thumbnail'] ?? '') : '')
=======
<<<<<<< HEAD
                ->addMediaFromUrl((is_array((string) $j) ? $j['desktop_thumbnail'] : null))
=======
                ->addMediaFromUrl($j['desktop_thumbnail'])
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->toMediaCollection('banner');

            // $banner->addMediaFromUrl($j['desktop_thumbnail']);
        }
    }
}
