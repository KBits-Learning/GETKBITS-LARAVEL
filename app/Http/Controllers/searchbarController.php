
<?php
namespace App;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Model;

class MemberSearchController extends Controller
{
  public function index(Request $request)
  {
    $results = (new Search())
    ->registerModel(Member::class, ['pack', 'track'])
    ->search($request->input('query'));
    
    return response()->json($results);
  }
}

data() {
  return {
    query: null,
    results: []
  };
},
watch: {
  query(after, before) {
    this.searchMem bers();
  }
},
methods: {
  searchMembers() {
    axios.get('pack/search', { params: { query: this.query } })
    .then(response => this.results = response.data)
    .catch(error => {});
  }
}