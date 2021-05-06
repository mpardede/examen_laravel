function show()
{
        $id = array(
            'title'=>'My App',
            'Description'=>'This is New Application',
            'author'=>'foo'
            );
        return view('welcome')->with($data);
}