<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8"/>
        <title>KBITS</title>
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <head/>    
    <body id="indexLogin">
       <template>
    <div>
      <input type="text" placeholder="Search" v-model="query">        
      <ul v-if="results.length > 0 && query">
        <li v-for="result in results.slice(0,10)" :key="result.id">
          <a :href="result.url">
            <div v-text="result.title"></div>
          </a>
        </li>
      </ul>
    </div>
</template>
    </body>