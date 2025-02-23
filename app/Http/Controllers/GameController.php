<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller {
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'genre' => 'required|string',
        ]);
        
        $game = auth()->user()->games()->create($validated);
        return response()->json($game, 201);
    }
    
    public function index(Request $request) {
        $query = auth()->user()->games();
        
        if ($request->has('genre')) {
            $query->where('genre', $request->genre);
        }
        
        if ($request->has('sort')) {
            $query->orderBy('release_date', $request->sort === 'desc' ? 'desc' : 'asc');
        }
        
        return $query->get();
    }
    
    public function update(Request $request, Game $game) {
        if ($game->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'release_date' => 'sometimes|date',
            'genre' => 'sometimes|string',
        ]);
        
        $game->update($validated);
        return response()->json($game);
    }
    
    public function destroy(Game $game) {
        if (auth()->user()->role !== 'admin' && $game->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
        $game->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
