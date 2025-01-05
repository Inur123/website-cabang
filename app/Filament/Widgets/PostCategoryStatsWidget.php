<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostCategoryStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        // Get the total number of posts
        $totalPosts = Post::count();

        // Get the total number of categories
        $totalCategories = Category::count();

        // Get the total number of visits (sum of 'visits' column in 'posts' table)
        $totalVisits = Post::sum('visits');

        return [
            // Card for Total Posts
            Stat::make('Total Posts', $totalPosts)
                ->color('primary'),

            // Card for Total Categories
            Stat::make('Total Categories', $totalCategories)
                ->color('secondary'),

            // Card for Total Visits
            Stat::make('Total Visits', $totalVisits)
                ->color('success'),
        ];
    }
}
