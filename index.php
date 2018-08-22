<!DOCTYPE html>
<html>
<head>
	<title>investigacion</title>
</head>
<body>
	<div>
		<center><h1>investigacion</h1></center>
		<hr>
	</div>
	<div>
		<div name="menu">
			<a name="menu"><h4>menu</h4>
			<ul>
				<li><a href="#tipos_var" >tipos de variables</a></li>
				<li><a href="#estructuras" >estructuras de control</li>
				<li><a href="#arreglos" >arreglos</li>
			</ul>
		</div>
			<hr>
		<div name="tipos_var">
			<a name="tipos_var">
				<p>En programación, las variables son espacios reservados en la memoria que, como su nombre indica, pueden cambiar de contenido a lo largo de la ejecución de un programa. Una variable corresponde a un área reservada en la memoria principal del ordenador. Para que nuestro código sea más entendible y claro, el identificador de la variable debe ser mnemotécnico, es decir que debe reflejar el uso dentro del programa de la misma.</p>
			 <table style="width:50%" border="1">
  <tr>
    <th>tipo</th>
    <th>descripcion</th> 

  </tr>
  <tr>
    <td>integer</td>
    <td><p>Los integers, o enteros, pueden tener distintos valores numéricos enteros que se expresan con diferentes notaciones.<br>
$variable = 18; // Número entero positivo<br>
$variable = -18; // Número entero negativo<br>
$variable = 0x12; // Notación hexadecimal, en principio no la utilizaremos
</p></td> 
  </tr>
  <tr>
    <td>float o double</td>
    <td><p>Este tipo de datos son los números de punto flotante a los que normalmente llamamos “números decimales”, por ejemplo, 9.876. Ambos tienen mucha precisión, pero double es el más preciso (con más decimales). La sintaxis para utilizarlos es bastante simple:
    $variable = 9.876
</p></td> 
  </tr>
   <tr>
    <td>string</td>
    <td><p>El tipo de datos string, también conocido como cadena de caracteres, se expresa con la siguiente sintaxis:
    $variable = "Yo soy una cadena"</p></td> 
  </tr>
   <tr>
    <td>boolean</td>
    <td><p>Se trata de un tipo lógico. Sus posibles valores son true (verdadero) o false (falso).
$variable = true;
$variable = false;</p></td> 
  </tr>
</table>
		</div>
			<hr>
		<div name="estructuras">
			<a name="estructuras">
				<h4>Estructuras de control</h4>
				<p>
					<div class="ui basic segment">
        <p>Un script PHP está contruido a partir de <strong>sentencias</strong>. Una sentencia puede ser una asignación, una llamada a una función, un loop, una sentencia condicional o una sentencia vacía. Las sentencias normalmente finalizan con un punto y coma.</p>
<p>Las <strong>estructuras de control</strong> son sentencias que permiten controlar cómo el código fluye en nuestro script basándose en ciertos factores. Por ejemplo, cuando queremos realizar una acción sólo si cierta variable está definida, o cuando queremos mostrar un <strong>array</strong> de datos a través de un <strong>loop</strong>.</p>
<p>Las estructuras de control son mayoritariamente <strong>condicionales</strong> (if, switch, etc) o <strong>loops</strong> (for, foreach, etc).</p>
<p><strong>Indice de contenido</strong></p>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>1. if</td>
<td>9. continue</td>
</tr>
<tr>
<td>2. else</td>
<td>10. switch</td>
</tr>
<tr>
<td>3. elseif/else if</td>
<td>11. declare</td>
</tr>
<tr>
<td>4. while</td>
<td>12. return</td>
</tr>
<tr>
<td>5. do-while</td>
<td>13. include/include_once</td>
</tr>
<tr>
<td>6. for</td>
<td>14. require/require_once</td>
</tr>
<tr>
<td>7. foreach</td>
<td>15. goto</td>
</tr>
<tr>
<td>8. break</td>
<td>16. Sintaxis alternativas</td>
</tr>
</tbody>
</table>
<h3>1. if</h3>
<p>La estructura de control <strong>if</strong> permite la ejecución condicional de fragmentos de código.</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">if</span> (<span class="hljs-variable">$x</span> &gt; <span class="hljs-variable">$y</span>) {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$x es mayor que $y"</span>;
}</span></code></pre>
<p>Las sentencias if se pueden incluir unas dentro de otras indefinidamente.</p>
<h3>2. else</h3>
<p>Sirve para ejecutar una sentencia cuando otra no se cumple. <em><strong>else</strong></em> extiende una sentencia <em><strong>if</strong></em>, y se ejecuta cuando ésta es <strong>false</strong>. Siguiendo el ejemplo anterior:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">if</span> (<span class="hljs-variable">$x</span> &gt; <span class="hljs-variable">$y</span>) {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$x es mayor que $y"</span>;
} <span class="hljs-keyword">else</span> {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$y es mayor que $x"</span>;
}</span></code></pre>
<h3>3. elseif/else if</h3>
<p>Es una combinación entre <em><strong>if</strong></em> y <em><strong>else</strong></em>. Se ejecuta cuando if es <strong>false</strong>, pero sólo si la expresión condicional del <em><strong>elseif</strong></em> es <strong>true</strong>.</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">if</span> (<span class="hljs-variable">$x</span> &gt; <span class="hljs-variable">$y</span>) {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$x es mayor que $y"</span>;
} <span class="hljs-keyword">elseif</span> (<span class="hljs-variable">$x</span> == <span class="hljs-variable">$y</span>) {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$x es igual que $y"</span>;
} <span class="hljs-keyword">else</span> {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$y es mayor que $x"</span>;
}</span></code></pre>
<p>Puede haber varios <em><strong>elseif</strong></em> dentro de una sentencia <em><strong>if</strong></em> (aunque en ese caso suele ser más recomendable usar <em><strong>switch</strong></em>). No hay diferencias de comportamiento entre <em><strong>elseif</strong></em> y <em><strong>else if</strong></em>. </p>
<p><em><strong>elseif</strong></em> sólo se ejecuta si el <em><strong>if</strong></em> precedente o cualquier <em><strong>elseif</strong></em> anterior son evaluadas como <strong>false</strong>.</p>
<h3>4. while</h3>
<p>Es el tipo más sencillo de <strong>loop</strong> en <strong>PHP</strong>. Se ejecutan las sentencias dentro del <em><strong>while</strong></em> siempre y cuando se evalúen como <strong>true</strong>. El valor de la expresión se comprueba cada vez al inicio del <strong>loop</strong>, y la ejecución no se detendrá hasta que finalice la <strong>iteración</strong> (cada vez que PHP ejecuta las sentencias en un loop es una iteración). Si la expresión <em><strong>while</strong></em> se evalúa como <strong>false</strong>, las sentencias no se ejecutarán ni siquiera una vez.</p>
<p>También es posible agrupar varias instrucciones <em><strong>while</strong></em> dentro de una.</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>;
<span class="hljs-keyword">while</span>(<span class="hljs-variable">$i</span> &lt;= <span class="hljs-number">10</span>){
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$i</span>;
    <span class="hljs-variable">$i</span>++;
}</span></code></pre>
<h3>5. do-while</h3>
<p>Muy similares a los loops <em><strong>while</strong></em>, simplemente aquí la expresión para el loop se verifica al final en lugar de al principio, esto garantiza que el código se ejecute por lo menos la primera vez. </p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$i</span> = <span class="hljs-number">0</span>;
<span class="hljs-keyword">do</span> {
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$i</span>;
} <span class="hljs-keyword">while</span> (<span class="hljs-variable">$i</span> &gt; <span class="hljs-number">0</span>);</span></code></pre>
<p>Este loop se ejecutaría sólo una vez, ya que después no cumple la condición.</p>
<h3>6. for</h3>
<p>Los loops <em><strong>for</strong></em> son los más complejos en PHP. </p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>; <span class="hljs-variable">$i</span> &lt;= <span class="hljs-number">10</span>; <span class="hljs-variable">$i</span>++) {
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$i</span>;
} <span class="hljs-comment">// Devuelve 123456789</span></span></code></pre>
<ul>
<li>Las expresiones o conjunto de expresiones van separadas por punto y coma <strong>;</strong> y sólo hay 3.</li>
<li>La primera expresión, <strong>$i = 1</strong>, se ejecuta una vez incondicionalmente al comienzo del bucle. </li>
<li>La segunda expresión, <strong>$i &lt;= 10</strong>, es una <strong>condición</strong>, si es true, se ejecutará la tercera expresión.</li>
<li>La tercera expresión, <strong>$i++</strong>, es la acción a realizar si se cumple la segunda expresión.</li>
</ul>
<p>Cada una de las expresiones pueden estar <strong>vacías</strong> o contener <strong>múltiples expresiones</strong>, lo que resulta útil en ciertas ocasiones. Si la expresión 2 está vacía, el loop será definido como <strong>true</strong>. </p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-comment">// Todos los siguientes ejemplos son válidos y devuelven lo mismo, 123456789</span>
<span class="hljs-comment">// EJEMPLO 1</span>
<span class="hljs-keyword">for</span>(<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>; <span class="hljs-variable">$i</span> &lt;= <span class="hljs-number">10</span>; <span class="hljs-variable">$i</span>++) {
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$i</span>;
}

<span class="hljs-comment">// EJEMPLO 2</span>
<span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>; ; <span class="hljs-variable">$i</span>++){
    <span class="hljs-keyword">if</span>(<span class="hljs-variable">$i</span> &gt; <span class="hljs-number">10</span>) {
        <span class="hljs-keyword">break</span>;
    }
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$i</span>;
}

<span class="hljs-comment">// EJEMPLO 3</span>
<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>;
<span class="hljs-keyword">for</span>( ; ; ){
    <span class="hljs-keyword">if</span>(<span class="hljs-variable">$i</span> &gt; <span class="hljs-number">10</span>){
        <span class="hljs-keyword">break</span>;
    }
    <span class="hljs-keyword">echo</span> <span class="hljs-variable">$i</span>;
    <span class="hljs-variable">$i</span>++;
}

<span class="hljs-comment">// EJEMPLO 4</span>
<span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>, <span class="hljs-variable">$j</span> = <span class="hljs-number">0</span>; <span class="hljs-variable">$i</span> &lt;= <span class="hljs-number">10</span>; <span class="hljs-variable">$j</span> += <span class="hljs-variable">$i</span>, <span class="hljs-keyword">print</span> <span class="hljs-variable">$i</span>, <span class="hljs-variable">$i</span>++);</span></code></pre>
<p>Dependiendo de donde se coloque el operador <strong>incremento</strong> o <strong>decremento</strong>, dará un resultado distinto:</p>
<pre><code class="hljs php"><span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>; <span class="hljs-variable">$i</span> &lt;= <span class="hljs-number">10</span>; <span class="hljs-keyword">print</span> <span class="hljs-variable">$i</span>++); <span class="hljs-comment">// 12345678910</span>
<span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span> = <span class="hljs-number">1</span>; <span class="hljs-variable">$i</span> &lt;= <span class="hljs-number">10</span>; <span class="hljs-keyword">print</span> ++<span class="hljs-variable">$i</span>); <span class="hljs-comment">// 234567891011</span></code></pre>
<p>Se pueden hacer <strong>iteraciones por medio de arrays</strong>:</p>
<pre><code class="hljs php"><span class="hljs-variable">$gente</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-keyword">array</span>(<span class="hljs-string">'nombre'</span> =&gt; <span class="hljs-string">'Carlos'</span>, <span class="hljs-string">'salt'</span> =&gt; <span class="hljs-number">123</span>),
    <span class="hljs-keyword">array</span>(<span class="hljs-string">'nombre'</span> =&gt; <span class="hljs-string">'Maria'</span>, <span class="hljs-string">'salt'</span> =&gt; <span class="hljs-number">124</span>));
<span class="hljs-comment">// Numero de gente</span>
<span class="hljs-variable">$size</span> = count(<span class="hljs-variable">$gente</span>);
<span class="hljs-comment">// Loop que da un salt de 4 dígitos aleatorio</span>
<span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span>=<span class="hljs-number">0</span>; <span class="hljs-variable">$i</span> &lt; <span class="hljs-variable">$size</span>; ++<span class="hljs-variable">$i</span>) {
    <span class="hljs-variable">$gente</span>[<span class="hljs-variable">$i</span>][<span class="hljs-string">'salt'</span>] = mt_rand(<span class="hljs-number">0000</span>, <span class="hljs-number">9999</span>);
}
var_dump(<span class="hljs-variable">$gente</span>);
<span class="hljs-comment">/*
* array (size=2)
  0 =&gt;
    array (size=2)
      'nombre' =&gt; string 'Carlos' (length=6)
      'salt' =&gt; int 2029
  1 =&gt;
    array (size=2)
      'nombre' =&gt; string 'Maria' (length=5)
      'salt' =&gt; int 9724
*/</span></code></pre>
<h3>7. foreach</h3>
<p><em><strong>foreach</strong></em> permite una forma fácil de iterar sobre <strong>arrays</strong> u <strong>objetos</strong>.</p>
<p>Cuando <em><strong>foreach</strong></em> inicia su ejecución, el puntero apunta directamente al primer elemento del <strong>array</strong>, por lo que no es necesario llamar a la función <em>reset()</em> antes que un <strong>loop</strong> <em>foreach</em>. Es recomendable no cambiar el puntero dentro del loop.</p>
<p>Se puede iterar de las siguientes dos formas:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-comment">// Devuelve directamente el value de cada key, comenzando desde el primero</span>
<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$array</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$value</span>) {
    <span class="hljs-comment">// Lo que se desee mostrar</span>
}
<span class="hljs-comment">// Devuelve cada key con cada value, para poder trabajar con cualquiera de los dos</span>
<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$array</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$key</span> =&gt; <span class="hljs-variable">$value</span>){
    <span class="hljs-comment">// Lo que se desee mostrar</span>
}</span></code></pre>
<p>Se pueden modificar los elementos del array dentro del loop, anteponiendo <strong>&amp;</strong> a <em>$value</em> (asignándolo por referencia).</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$array</span> = <span class="hljs-keyword">array</span>(<span class="hljs-number">1</span>, <span class="hljs-number">2</span>, <span class="hljs-number">3</span>, <span class="hljs-number">4</span>);
<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$array</span> <span class="hljs-keyword">as</span> &amp;<span class="hljs-variable">$value</span>){
    <span class="hljs-variable">$value</span> = <span class="hljs-variable">$value</span> * <span class="hljs-number">2</span>;
}
<span class="hljs-comment">// cada valor del array vale ahora : 2, 4, 6, 8</span>
<span class="hljs-keyword">unset</span>(<span class="hljs-variable">$value</span>);</span></code></pre>
<p>La función <em>unset()</em> elimina la referencia del último elemento, pero el array sigue valiendo 2, 4, 6, 8. Es recomendable hacer <em>unset()</em> porque la referencia del <em>$valor</em> y el último elemento del array permanecen aún después del loop foreach.</p>
<p><a href="http://php.net/manual/es/control-structures.foreach.php"><em>foreach</em></a> y <em><a href="http://php.net/manual/es/function.list.php">list</a></em> pueden devolver los mismos resultados de la siguiente forma:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$array</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"uno"</span>, <span class="hljs-string">"dos"</span>, <span class="hljs-string">"tres"</span>);
reset(<span class="hljs-variable">$array</span>);
<span class="hljs-keyword">while</span> (<span class="hljs-keyword">list</span>(<span class="hljs-variable">$clave</span>, <span class="hljs-variable">$valor</span>) = each(<span class="hljs-variable">$array</span>)){
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"Clave: $clave; Valor: $valor &lt;/br&gt;"</span>;
}

<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$array</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$clave</span> =&gt; <span class="hljs-variable">$valor</span>){
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"Clave: $clave; Valor: $valor &lt;/br&gt;"</span>;
}</span></code></pre>
<p>La función <em>list()</em> coge un <em>array</em> y lo convierte en <strong>variables</strong> individuales.</p>
<p><em>each()</em> coge un <em>array</em> y devuelve el key y value actuales, es decir, donde está apuntando el cursor en el array. Es necesario hacer un <em><a href="http://php.net/manual/es/function.reset.php">reset()</a></em> del <em>array</em> para asegurarse que el cursor comienza desde el principio (cosa que no es necesaria con el foreach).</p>
<p>Suele ser más óptimo y legible utilizar el <em><strong>foreach</strong></em> para iterar, aunque ambos se utilizan más o menos con la misma frecuencia.</p>
<p>Con <strong>arrays multidimensionales</strong> se puede hacer un <strong>doble foreach</strong>:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$x</span> = <span class="hljs-keyword">array</span>();
<span class="hljs-variable">$x</span>[<span class="hljs-number">0</span>][<span class="hljs-number">0</span>] = <span class="hljs-string">"a"</span>;
<span class="hljs-variable">$x</span>[<span class="hljs-number">0</span>][<span class="hljs-number">1</span>] = <span class="hljs-string">"b"</span>;
<span class="hljs-variable">$x</span>[<span class="hljs-number">1</span>][<span class="hljs-number">0</span>] = <span class="hljs-string">"y"</span>;
<span class="hljs-variable">$x</span>[<span class="hljs-number">1</span>][<span class="hljs-number">1</span>] = <span class="hljs-string">"z"</span>;

<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$x</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$primero</span>){
    <span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$primero</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$segundo</span>){
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"$segundo"</span> . <span class="hljs-string">"&lt;/br&gt;"</span>;
        }
    }
</span></code></pre>
<p>En el ejemplo anterior, si no se hace doble foreach con <em>$x</em> y se hace sólo un foreach surgirá un <em>Notice: Array to string conversion</em>.</p>
<p>Desde PHP 5.5 se puede recorrer un <strong>array de arrays</strong> y utilizar el segundo array para asignar variables:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$array</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-keyword">array</span>(<span class="hljs-string">'azul'</span>, <span class="hljs-string">'rojo'</span>),
    <span class="hljs-keyword">array</span>(<span class="hljs-string">'verde'</span>, <span class="hljs-string">'amarillo'</span>)
    );

<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$array</span> <span class="hljs-keyword">as</span> <span class="hljs-keyword">list</span>(<span class="hljs-variable">$a</span>, <span class="hljs-variable">$b</span>)) {
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"A: $a; B: $b"</span> . <span class="hljs-string">"&lt;/br&gt;"</span>;
}
<span class="hljs-comment">// Devuelve: </span></span></code></pre>
<h3>8. break</h3>
<p><em><strong>break</strong></em> termina la ejecución de las siguientes estructuras: <em><strong>for</strong></em>, <em><strong>foreach</strong></em>, <em><strong>while</strong></em>, <em><strong>do-while</strong></em> y <em><strong>switch</strong></em>.</p>
<p>Se puede añadir un <strong>argumento numérico opcional</strong> que indica de cuántas estructuras debe salir. El valor por defecto es 1:</p>
<pre><code class="hljs php"><span class="hljs-comment">// Ejemplo sin valor numérico</span>
<span class="hljs-variable">$array</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">'uno'</span>, <span class="hljs-string">'dos'</span>, <span class="hljs-string">'parar'</span>, <span class="hljs-string">'tres'</span>);
<span class="hljs-keyword">while</span>(<span class="hljs-keyword">list</span>(, <span class="hljs-variable">$valor</span>) = each(<span class="hljs-variable">$array</span>)){
    <span class="hljs-keyword">if</span>(<span class="hljs-variable">$valor</span> == <span class="hljs-string">'parar'</span>){
        <span class="hljs-keyword">break</span>;
    }
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"$valor&lt;/br&gt;"</span>;
}
<span class="hljs-comment">// Ejemplo con valor numérico</span>
<span class="hljs-variable">$i</span> = <span class="hljs-number">0</span>;
<span class="hljs-keyword">while</span> (++<span class="hljs-variable">$i</span>){
    <span class="hljs-keyword">switch</span>(<span class="hljs-variable">$i</span>){
        <span class="hljs-keyword">case</span> <span class="hljs-number">5</span>:
            <span class="hljs-keyword">echo</span> <span class="hljs-string">"He llegado a 5 &lt;/br&gt;"</span>;
            <span class="hljs-keyword">break</span> <span class="hljs-number">1</span>; <span class="hljs-comment">// Aquí sólo saldría del switch</span>
        <span class="hljs-keyword">case</span> <span class="hljs-number">10</span>:
            <span class="hljs-keyword">echo</span> <span class="hljs-string">"He llegado a 10 &lt;/br&gt;"</span>;
            <span class="hljs-keyword">break</span> <span class="hljs-number">2</span>; <span class="hljs-comment">// Sale del switch y del while</span>
        <span class="hljs-keyword">default</span>:
            <span class="hljs-keyword">break</span>;
    }
}</code></pre>
<h3>9. continue</h3>
<p>Se utiliza <strong>dentro de las estructuras iterativas</strong> para <strong>saltar</strong> el resto de la iteración actual del loop y <strong>continuar a la siguiente iteración</strong> para su ejecución:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">for</span> (<span class="hljs-variable">$i</span>=<span class="hljs-number">0</span>; <span class="hljs-variable">$i</span> &lt; <span class="hljs-number">10</span>; <span class="hljs-variable">$i</span>++) {
    <span class="hljs-keyword">if</span>(<span class="hljs-variable">$i</span> % <span class="hljs-number">2</span> == <span class="hljs-number">0</span>)
        <span class="hljs-keyword">continue</span>;
    <span class="hljs-keyword">print</span> <span class="hljs-string">"$i "</span>;
} <span class="hljs-comment">// Devuelve 1 3 5 7 9</span></span></code></pre>
<p>El código anterior hace que cuando el número sea par, <em><strong>continue</strong></em> se ejecute y no muestre el print de después, sino que vuelva a empezar con la siguiente iteración. <em><strong>print</strong></em> sólo se ejecutará cuando <em>$i</em> sea impar.</p>
<p>Al igual que con <em><strong>break</strong></em>, se puede añadir un número a <em><strong>continue</strong></em> que indica el número de niveles de loops debe saltar:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$i</span> = <span class="hljs-number">0</span>;
<span class="hljs-keyword">while</span> (<span class="hljs-variable">$i</span>++ &lt; <span class="hljs-number">5</span>){
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"Uno &lt;/br&gt;"</span>;
    <span class="hljs-keyword">while</span> (<span class="hljs-number">1</span>) {
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Dos &lt;/br&gt;"</span>;
        <span class="hljs-keyword">while</span> (<span class="hljs-number">1</span>) {
            <span class="hljs-keyword">echo</span> <span class="hljs-string">"Tres &lt;/br&gt;&lt;/br&gt;"</span>;
            <span class="hljs-keyword">continue</span> <span class="hljs-number">3</span>;
        }
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"Esto no aparece."</span>;
    }
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"Esto tampoco aparece."</span>;
}</span></code></pre>
<p>En este ejemplo, cuando llega a <em><strong>continue 3</strong></em>, comienza de nuevo la iteración, y se comprueba otra vez la condición ($i++ &lt; 5). Si se pone, por ejemplo, <em><strong>continue 2</strong></em>, salta al segundo while, cuya condición siempre se cumple, y se produce un <strong>loop infinito</strong> que imprime "Dos Tres" continuamente.</p>
<h3>10. switch</h3>
<p><em><strong>switch</strong></em> es como una serie de sentencias <em><strong>if</strong></em>. Es útil para comparar una misma <strong>variable o expresión</strong> con valores direrentes y ejecutar un código diferente a otro dependiendo de esos valores. </p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">switch</span> (<span class="hljs-variable">$i</span>) {
    <span class="hljs-keyword">case</span> <span class="hljs-string">"perro"</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"\$i es un perro"</span>;
        <span class="hljs-keyword">break</span>;
    <span class="hljs-keyword">case</span> <span class="hljs-string">"gato"</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"\$i es un gato"</span>;
        <span class="hljs-keyword">break</span>;
    <span class="hljs-keyword">case</span> <span class="hljs-string">"avestruz"</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"\$i es un avestruz"</span>;
        <span class="hljs-keyword">break</span>;
}</span></code></pre>
<p>Cuando una sentencia <em><strong>case</strong></em> coincide con el valor de la sentencia <em><strong>switch</strong></em>, PHP ejecuta el código dentro del <em>case</em>. PHP sigue ejecutando las sentencias hasta el final o hasta que choca con un <em><strong>break</strong></em>, que entonces finaliza la iteración. Si se omite <em>break</em>, swith ejecutará todos los <em>cases</em> restantes cuando encuentra uno que cumpla con la condición:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">switch</span> (<span class="hljs-variable">$i</span>) {
    <span class="hljs-keyword">case</span> <span class="hljs-number">0</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es igual a 0"</span>;
    <span class="hljs-keyword">case</span> <span class="hljs-number">1</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es igual a 1"</span>;
    <span class="hljs-keyword">case</span> <span class="hljs-number">2</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es igual a 2"</span>;
}</span></code></pre>
<p>En el ejemplo anterior, si se define a <em>$i</em> como 0, se mostrarán todos los <em><strong>echo</strong></em> restantes porque no hay ningún <em><strong>break</strong></em>. Si se define a <em>$i</em> como 1, se mostrarán los <em>echo</em> del <em>case</em> 1 y <em>case</em> 2. Si se define a <em>$i</em> como 2, sólo se mostrará el <em>case</em> 2. </p>
<p>Con <em><strong>switch</strong></em> la condición sólo se evalúa una vez, y su valor es comparado con cada uno de los <em>case</em>, a diferencia de lo que ocurre con <em><strong>elseif</strong></em>, que la condión se va evaluando continuamente con el loop.</p>
<p><em><strong>case</strong></em> puede no ejecutar ningún código, pero hace que se activen los cases posteriores hasta que se encuentre con un break:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">switch</span> (<span class="hljs-variable">$i</span>) {
<span class="hljs-keyword">case</span> <span class="hljs-number">0</span>:
<span class="hljs-keyword">case</span> <span class="hljs-number">1</span>:
<span class="hljs-keyword">case</span> <span class="hljs-number">2</span>:
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es menor que 3 no negativo"</span>;
    <span class="hljs-keyword">break</span>;
<span class="hljs-keyword">case</span> <span class="hljs-number">3</span>:
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es 3"</span>;
}</span></code></pre>
<p>En caso de que no haya ningún <em>case</em> válido, puede utilizarse <em><strong>default</strong></em>, para ejecutar algo cuando no se cumplen los case:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">switch</span>(<span class="hljs-variable">$i</span>) {
    <span class="hljs-keyword">case</span> <span class="hljs-number">0</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es igual a 0"</span>;
        <span class="hljs-keyword">break</span>;
    <span class="hljs-keyword">case</span> <span class="hljs-number">1</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"i es igual a 1"</span>;
        <span class="hljs-keyword">break</span>;
    <span class="hljs-keyword">default</span>:
        <span class="hljs-keyword">echo</span> <span class="hljs-string">"i no es ni 0 ni 1"</span>;
}</span></code></pre>
<ul>
<li>En los cases sólo se permiten <strong>tipos simples</strong>: <em>int</em>, <em>float</em> y <em>string</em>. Los <strong>arrays</strong> y <strong>objetos</strong> pueden utilizarse si se muestran como un tipo simple. </li>
<li>Es posible escribir punto y coma ";" en lugar de dos puntos ":" después de un <em>case</em>. </li>
</ul>
<h3>11. declare</h3>
<p><em><strong>declare</strong></em> sirve para fijar directivas de ejecución para un bloque de código. </p>
<pre><code class="hljs nginx"><span class="hljs-title">declare</span> (directive)
    statement</code></pre>
<p>La sección directive permite configurar el comportamiento de declare. Sólo hay dos directivas: <em><strong>ticks</strong></em> y <em><strong>encoding</strong></em>. </p>
<ul>
<li>No se pueden emplear variables ni constantes para las directivas.</li>
</ul>
<p>Se pueden usar corchetes para fijar el statement o si no se aplican afecta a todo el archivo:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">declare</span>(ticks=<span class="hljs-number">1</span>){
   <span class="hljs-comment">// Código afectado</span>
}

<span class="hljs-keyword">declare</span>(ticks=<span class="hljs-number">1</span>);
<span class="hljs-comment">// Código afectado</span>
</span></code></pre>
<p>En este segundo ejemplo si el archivo con el declare ha sido incluído, no afectará al archivo padre.</p>
<h4><strong>Ticks</strong></h4>
<p>La ejecución de un <strong>script PHP</strong> puede representarse como una ejecución de muchas sentencias. La mayoría de las sentencias provocan un <strong>tick</strong> (aunque no todas). Por ejemplo en el siguiente ejemplo habría 3 ticks:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$x</span> = <span class="hljs-number">1</span>;
<span class="hljs-variable">$y</span> = <span class="hljs-number">2</span>;
<span class="hljs-variable">$z</span> = <span class="hljs-number">3</span>;</span></code></pre>
<p>Con <strong>declare(ticks=N)</strong> y _<a href="http://php.net/manual/es/function.register-tick-function.php">register_tick_function()</a>_ se puede ejecutar código entre los <strong>ticks</strong>. La función _register_tick<em>function</em> especifica la función a llamar cuando un tick ocurre. declare establece cuantos ticks han de pasar hasta que un evento tick se ejecuta.</p>
<ul>
<li>Con declare(ticks=1) y _register_tick<em>function('miFuncion')</em>; llamará a <em>miFuncion()</em> después de cada tick. </li>
<li>Con declare(ticks=3), <em>miFuncion()</em> se ejecutará cada 3 ticks. </li>
</ul>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">handler</span><span class="hljs-params">()</span></span>{
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"Hola"</span>;
}

register_tick_function(<span class="hljs-string">"handler"</span>);
<span class="hljs-variable">$i</span> = <span class="hljs-number">0</span>;
<span class="hljs-keyword">declare</span>(ticks = <span class="hljs-number">3</span>) {
    <span class="hljs-keyword">while</span>(<span class="hljs-variable">$i</span> &lt; <span class="hljs-number">9</span>)
        <span class="hljs-keyword">echo</span> ++<span class="hljs-variable">$i</span>;
} <span class="hljs-comment">// Devuelve 123Hola456Hola789Hola</span></span></code></pre>
<h4><strong>Encoding</strong></h4>
<p>La codificación puede ser especificada para cada script con encoding:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">declare</span>(encoding=<span class="hljs-string">'ISO-8859-1'</span>);
<span class="hljs-comment">// Código a ejecutar</span></span></code></pre>
<h3>12. return</h3>
<p><em><strong>return</strong></em> devuelve el control del programa al módulo que lo invoca. La ejecución vuelve a la siguiente declaración después del módulo que lo invoca. </p>
<ul>
<li>Si se usa en una <strong>función</strong>, return hace que la función termine, devolviendo los argumentos que le sigan como valor de la llamada a la función. </li>
<li>Si se llama <strong>globalmente</strong>, finaliza la ejecución del script actual. </li>
<li>Si el archivo actual fue incluido o requerido, el control regresa al archivo que llama al <em><strong>include</strong></em> o <em><strong>require</strong></em>.</li>
<li>Si el archivo está incluído con <em><strong>include</strong></em>, los argumentos del return se devolverán como valor de la llamada <em><strong>include</strong></em>.</li>
<li>Si return se usa en el <strong>archivo principal del script</strong>, termina la ejecución del script.</li>
<li>También termina la ejecución de una sentencia <em><strong>eval()</strong></em>.</li>
</ul>
<p>Es recomendable <strong>no</strong> usar paréntesis después de return. </p>
<h3>13. include/include_once</h3>
<p><em><strong>include</strong></em> incluye y ejecuta un archivo. </p>
<p>Los archivos se incluyen en base a la <strong>ruta de acceso dada</strong>, y si no se proporciona ninguna, se utiliza el <a href="http://php.net/manual/es/ini.core.php#ini.include-path">include_path</a>. Si el archivo tampoco se encuentra en el <strong>include_path</strong> se mirará en el <strong>propio directorio</strong> desde donde se hace la llamada, antes de devolver un <strong>mensaje warning</strong>. Es en el tipo de mensaje donde difiere con require, que devuelve un <strong>error fatal</strong>.  </p>
<ul>
<li>Si se define una ruta absoluta (en Linux comenzando por /) o relativa al directorio actual (comenzando con . o ..) el <strong>include_path</strong> será ignorado.</li>
</ul>
<p>Las variables del archivo del include estarán disponibles en el archivo desde el que se solicita:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-comment">// archivo1.php</span>
<span class="hljs-variable">$color</span> = <span class="hljs-string">'azul'</span>;
<span class="hljs-comment">// archivo2.php</span>
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$color</span>; <span class="hljs-comment">// Devuelve un Notice: Undefined variable: color</span>
<span class="hljs-keyword">include</span> <span class="hljs-string">'archivo1.php'</span>;
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$color</span>; <span class="hljs-comment">// Devuelve azul</span></span></code></pre>
<ul>
<li>Si la inclusión se hace dentro de una <strong>función</strong>, el contenido del archivo es como si estuviera dentro de esa función, por tanto su contenido tendrá el mismo ámbito.</li>
<li>Cuando se incluye un archivo, el intérprete abandona el modo PHP e ingresa al modo HTML al comienzo del archivo incluído, y se reanuda de nuevo al final. Es por ello que cualquier código que tenga que ser interpretado como PHP debe incluir las etiquetas válidas de comienzo  y terminación (<strong>&lt;?php ?&gt;</strong>).</li>
</ul>
<p>Si están activadas las <strong>envolturas URL include</strong>, se puede incluir un archivo a través de una URL (mediante HTTP u <a href="http://php.net/manual/es/wrappers.php">otro protocolo</a>). Si el servidor objetivo interpreta el archivo como PHP, las variables se pueden pasar al archivo usando un string de petición como con HTTP GET. El resultado no es lo mismo que en local, pues el archivo se ejecuta en el servidor remoto y el resultado se incluye en el local.</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">include</span> <span class="hljs-string">'http://www.ejemplo.com/archivo.php?var=1'</span>;
<span class="hljs-variable">$var</span> = <span class="hljs-number">1</span>;</span></code></pre>
<p>Por <strong>seguridad</strong> es mejor que el archivo remoto se procese en el servidor remoto y se reciba sólo la salida, con <a href="http://php.net/manual/es/function.readfile.php"><em>readfile()</em></a>.</p>
<p>Es posible devolver valores desde los archivos include mediante <strong>return</strong>:</p>
<pre><code class="hljs php"><span class="hljs-comment">// archivo1.php con return</span>
<span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$var</span> = <span class="hljs-string">'PHP'</span>;
<span class="hljs-keyword">return</span> <span class="hljs-variable">$bar</span>;
<span class="hljs-preprocessor">?&gt;</span>
<span class="hljs-comment">// archivo2.php sin return</span>
<span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$var</span> = <span class="hljs-string">'PHP'</span>;
<span class="hljs-preprocessor">?&gt;</span>
<span class="hljs-comment">//archivo3.php</span>
<span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$foo</span> = <span class="hljs-keyword">include</span> <span class="hljs-string">'archivo1.php'</span>;
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$foo</span>; <span class="hljs-comment">// devuelve PHP</span>

<span class="hljs-variable">$bar</span> = <span class="hljs-keyword">include</span> <span class="hljs-string">'archivo2.php'</span>;
<span class="hljs-keyword">echo</span> <span class="hljs-variable">$bar</span>; <span class="hljs-comment">// Devuelve 1 porque el include ha sido exitoso, pero no tiene valor return. Si no hubiera funcionado devolvería false y un E_WARNING.</span></code></pre>
<p>También se pueden incluir archivos PHP en variables con un buffering de salida:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-variable">$string</span> = get_include_contents(<span class="hljs-string">'archivo.php'</span>);

<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">get_include_contents</span><span class="hljs-params">(<span class="hljs-variable">$filename</span>)</span> </span>{
    <span class="hljs-keyword">if</span>(is_file(<span class="hljs-variable">$filename</span>)) {
        ob_start();
        <span class="hljs-keyword">include</span> <span class="hljs-variable">$filename</span>;
        <span class="hljs-keyword">return</span> ob_get_clean();
    }
    <span class="hljs-keyword">return</span> <span class="hljs-keyword">false</span>;
}</span></code></pre>
<p>Para incluir archivos automáticamente en scripts ver <a href="http://php.net/manual/es/ini.core.php#ini.auto-prepend-file">auto_preprend_file</a> y <a href="http://php.net/manual/es/ini.core.php#ini.auto-append-file">auto_append_file</a> de <em>php.ini</em>.</p>
<p>_<strong>include_once</strong>_ incluye el archivo especificado sólo una vez, si se incluye más veces tan sólo devuelve true. Es útil en casos donde el mismo fichero se podría incluir y evaluar más de una vez, para evitar así redefinir funciones o reasignar valores a variables.</p>
<h3>14. require/require_once</h3>
<p><em><strong>require</strong></em> hace lo mismo que <em><strong>include</strong></em> pero en caso de fallar devuelve un <strong>error fatal</strong> de nivel <strong>E_COMPILE_ERROR</strong>, por lo que no puede continuar el script. <em>include</em> sólo emite un <strong>E_WARNING</strong> que permite continuar el script.</p>
<p>_<strong>require_once</strong><em> es igual que </em><strong>require</strong>_ pero PHP comprobará si el archivo ya ha sido incluído, y si es así no se incluirá otra vez. </p>
<h3>15. goto</h3>
<p><em><strong>goto</strong></em> se utiliza para saltar a otra sección del script. La <strong>etiqueta de destino</strong> debe estar dentro del mismo fichero y ámbito. </p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">goto</span> x;
<span class="hljs-keyword">echo</span> <span class="hljs-string">'Hola!'</span>;

x:
<span class="hljs-keyword">echo</span> <span class="hljs-string">'Adios!'</span>;  <span class="hljs-comment">// sólo se imprimirá Adios!</span></span></code></pre>
<p>También puede utilizarse en un <strong>loop</strong> en lugar de <em><strong>break</strong></em>:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">for</span>(<span class="hljs-variable">$i</span>=<span class="hljs-number">0</span>, <span class="hljs-variable">$j</span>=<span class="hljs-number">50</span>; <span class="hljs-variable">$i</span>&lt;<span class="hljs-number">100</span>; <span class="hljs-variable">$i</span>++) {
    <span class="hljs-keyword">while</span>(<span class="hljs-variable">$j</span>--) {
        <span class="hljs-keyword">if</span>(<span class="hljs-variable">$j</span>==<span class="hljs-number">17</span>) <span class="hljs-keyword">goto</span> end;
        }
    }
<span class="hljs-keyword">echo</span> <span class="hljs-string">"i = $i"</span>;
end:
<span class="hljs-keyword">echo</span> <span class="hljs-string">'j llegó a 17'</span>;</span></code></pre>
<h3>16. Sintaxis alternativas</h3>
<p>PHP ofrece una <strong>sintaxis alternativa</strong> para <em>if</em>, <em>while</em>, <em>for</em>, <em>foreach</em> y <em>switch</em>. Se cambia el corchete de apertura por dos puntos ":" y el corchete de cierre por <em><strong>endif</strong></em>, <em><strong>endwhile</strong></em>, <em><strong>endfor</strong></em>, <em><strong>endforeach</strong></em>, o <em><strong>endswitch</strong></em>. </p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span> <span class="hljs-keyword">if</span> (<span class="hljs-variable">$x</span> == <span class="hljs-number">3</span>): <span class="hljs-preprocessor">?&gt;</span></span>
X es 3
<span class="php"><span class="hljs-preprocessor">&lt;?php</span> <span class="hljs-keyword">endif</span>; <span class="hljs-preprocessor">?&gt;</span></span></code></pre>
<p>"X es 3" es un bloque HTML que se mostraría sólo si se cumple la condición.</p>
<p>Con <strong>else</strong> y <strong>elseif</strong>:</p>
<pre><code class="hljs xml"><span class="php"><span class="hljs-preprocessor">&lt;?php</span>
<span class="hljs-keyword">if</span>(<span class="hljs-variable">$x</span> == <span class="hljs-number">3</span>):
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"x igual a 3"</span>;
<span class="hljs-keyword">elseif</span> (<span class="hljs-variable">$x</span> == <span class="hljs-number">4</span>):
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"x igual a 4"</span>;
<span class="hljs-keyword">else</span>:
    <span class="hljs-keyword">echo</span> <span class="hljs-string">"x no es ni 3 ni 4"</span>;
<span class="hljs-keyword">endif</span>;</span></code></pre>
    </div>
				</p>

		</div>
		    <hr>
		<div name="arreglos">
			<a name="arreglos">
				<h4>arreglos</h4>
				<div class="ui basic segment">
        <p>Según la <strong>documentación de PHP</strong>, existen un total de 79 funciones de arrays. En este apartado se recogen algunas de las más importantes divididas por secciones (no se incluyen las ya utilizadas para la iteración de arrays).</p>
<p><strong>Indice de contenido</strong></p>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>1. Comparar arrays</td>
<td>4. Rellenar arrays</td>
</tr>
<tr>
<td>2. Unir arrays</td>
<td>5. Dividir arrays</td>
</tr>
<tr>
<td>3. Ordenar arrays</td>
<td>6. Modificar elementos en arrays</td>
</tr>
</tbody>
</table>
<h3>1. Comparar arrays</h3>
<p>Para <strong>comparar arrays</strong> existen 5 funciones principales de la familia **array<em>diff</em>*** :</p>
<ul>
<li>array_diff
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_diff (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span>, <span class="hljs-keyword">array</span> <span class="hljs-variable">$array2</span> [, <span class="hljs-keyword">array</span> $... ])</code></pre></li>
</ul>
<p>Compara  <em>$array1</em> con uno o más arrays y devuelve los <strong>valores</strong> de <em>$array1</em> que no estén presentes en <strong>cualquiera</strong> de los demás arrays.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"chimpancé"</span> =&gt; <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"chinchilla"</span> =&gt; <span class="hljs-string">"Herminia"</span>,
    <span class="hljs-string">"Charles"</span>,
    <span class="hljs-string">"oso"</span> =&gt; <span class="hljs-string">"Tarzan"</span>
);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"conejo"</span> =&gt; <span class="hljs-string">"Tarzan"</span>,
    <span class="hljs-string">"Muggles"</span>
);
<span class="hljs-variable">$diferencia</span> = array_diff(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>);
var_dump(<span class="hljs-variable">$diferencia</span>);
<span class="hljs-comment">/*
Devuelve:
array (size=2)
  'chinchilla' =&gt; string 'Herminia' (length=8)
  0 =&gt; string 'Charles' (length=7)
*/</span></code></pre>
<p>Se observa que lo que compara son los <strong>valores</strong>.</p>
<ul>
<li>array_diff_assoc
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_diff_assoc (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span>, <span class="hljs-keyword">array</span> <span class="hljs-variable">$array2</span> [, <span class="hljs-keyword">array</span> $... ])</code></pre></li>
</ul>
<p>Compara <em><strong>$array1</strong></em> con $<em><strong>array2</strong></em> y devuelve la diferencia, pero esta vez comparando <strong>values</strong> y <em><strong>keys</strong></em>. Se aceptan también más arrays opcionales.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"chimpancé"</span> =&gt; <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"chinchilla"</span> =&gt; <span class="hljs-string">"Herminia"</span>,
    <span class="hljs-string">"Charles"</span>,
    <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"oso"</span> =&gt; <span class="hljs-string">"Tarzan"</span>
);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"conejo"</span> =&gt; <span class="hljs-string">"Tarzan"</span>,
    <span class="hljs-string">"Muggles"</span>
);
<span class="hljs-variable">$diferencia</span> = array_diff_assoc(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>);
var_dump(<span class="hljs-variable">$diferencia</span>);
<span class="hljs-comment">/*
array (size=5)
  'chimpancé' =&gt; string 'Muggles' (length=7)
  'chinchilla' =&gt; string 'Herminia' (length=8)
  0 =&gt; string 'Charles' (length=7)
  1 =&gt; string 'Muggles' (length=7)
  'oso' =&gt; string 'Tarzan' (length=6)
*/</span></code></pre>
<p>"Muggles" también lo añade porque tienen diferente key. En el primer array tiene key 1 y en el segundo key 0.</p>
<ul>
<li>array_diff_key
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_diff_key (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span>, <span class="hljs-keyword">array</span> <span class="hljs-variable">$array2</span> [, <span class="hljs-keyword">array</span> $... ])</code></pre></li>
</ul>
<p>Compara las <em><strong>keys</strong></em> de <em>$array1</em> con las keys de <em>$array2</em> y devuelve la diferencia. Es como _array<em>diff()</em> pero sólo comparando los <em><strong>keys</strong></em> en lugar de los <em>values</em>.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"chimpancé"</span> =&gt; <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"chinchilla"</span> =&gt; <span class="hljs-string">"Herminia"</span>,
    <span class="hljs-string">"Charles"</span>,
    <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"oso"</span> =&gt; <span class="hljs-string">"Tarzan"</span>
);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"conejo"</span> =&gt; <span class="hljs-string">"Tarzan"</span>,
    <span class="hljs-string">"Muggles"</span>
);
<span class="hljs-variable">$diferencia</span> = array_diff_key(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>);
var_dump(<span class="hljs-variable">$diferencia</span>);
<span class="hljs-comment">/*
array (size=4)
  'chimpancé' =&gt; string 'Muggles' (length=7)
  'chinchilla' =&gt; string 'Herminia' (length=8)
  1 =&gt; string 'Muggles' (length=7)
  'oso' =&gt; string 'Tarzan' (length=6)
*/</span></code></pre>
<ul>
<li>array_diff_uassoc
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_diff_uassoc (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span>, <span class="hljs-keyword">array</span> <span class="hljs-variable">$array2</span> [, <span class="hljs-keyword">array</span> $... ], callable <span class="hljs-variable">$key_compare_func</span>)</code></pre></li>
</ul>
<p>Compara <em>$array1</em> con <em>$array2</em> y devuelve la diferencia. Difiere de _array_diff<em>assoc()</em> en que se añade una <strong>función callable</strong> para la <strong>comparación de los elementos</strong>.</p>
<p>La <strong>función de comparación</strong> tiene que devolver un entero menor, igual o mayor que cero si el primer argumento es menor, igual o mayor que el segundo.</p>
<p>Devuelve todos los elementos de <em>$array1</em> que no están en ninguno de los demás arrays.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"chimpancé"</span> =&gt; <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"chinchilla"</span> =&gt; <span class="hljs-string">"Herminia"</span>,
    <span class="hljs-string">"Charles"</span>,
    <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"oso"</span> =&gt; <span class="hljs-string">"Tarzan"</span>
);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"conejo"</span> =&gt; <span class="hljs-string">"Tarzan"</span>,
    <span class="hljs-string">"Muggles"</span>
);
<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">funcionComparacion</span><span class="hljs-params">(<span class="hljs-variable">$x</span>, <span class="hljs-variable">$y</span>)</span>
</span>{
    <span class="hljs-keyword">if</span> (<span class="hljs-variable">$x</span> === <span class="hljs-variable">$y</span>){
        <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
    }
    <span class="hljs-keyword">return</span> (<span class="hljs-variable">$x</span> &gt; <span class="hljs-variable">$y</span>)? <span class="hljs-number">1</span>:-<span class="hljs-number">1</span>;
}
<span class="hljs-variable">$array</span> = array_diff_uassoc(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>, <span class="hljs-string">"funcionComparacion"</span>);
var_dump(<span class="hljs-variable">$array</span>);
<span class="hljs-comment">/*
array (size=5)
  'chimpancé' =&gt; string 'Muggles' (length=7)
  'chinchilla' =&gt; string 'Herminia' (length=8)
  0 =&gt; string 'Charles' (length=7)
  1 =&gt; string 'Muggles' (length=7)
  'oso' =&gt; string 'Tarzan' (length=6)
 */</span></code></pre>
<ul>
<li>array_diff_ukey
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_diff_ukey (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span>, <span class="hljs-keyword">array</span> <span class="hljs-variable">$array2</span> [, <span class="hljs-keyword">array</span> $... ], callable <span class="hljs-variable">$key_compare_func</span> )</code></pre></li>
</ul>
<p>Compara las <em><strong>keys</strong></em> del <em>$array1</em> con las <em><strong>keys</strong></em> del <em>$array2</em> y devuelve la diferencia. Difiere de _array_diff<em>key</em> en que añade una función callable para la comparación de los <strong>keys</strong>.</p>
<p>La <strong>función de comparación</strong> tiene que devolver un entero menor, igual o mayor que cero si el primer argumento es menor, igual o mayor que el segundo.</p>
<p>Devuelve todos los elementos de <em>$array1</em> que no están en ninguno de los demás arrays.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"chimpancé"</span> =&gt; <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"chinchilla"</span> =&gt; <span class="hljs-string">"Herminia"</span>,
    <span class="hljs-string">"Charles"</span>,
    <span class="hljs-string">"Muggles"</span>,
    <span class="hljs-string">"oso"</span> =&gt; <span class="hljs-string">"Tarzan"</span>
);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span> (
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Stoichkov"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Sunny"</span>,
    <span class="hljs-string">"conejo"</span> =&gt; <span class="hljs-string">"Tarzan"</span>,
    <span class="hljs-string">"Muggles"</span>
);
<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">funcionComparacion</span><span class="hljs-params">(<span class="hljs-variable">$key1</span>, <span class="hljs-variable">$key2</span>)</span>
</span>{
    <span class="hljs-keyword">if</span> (<span class="hljs-variable">$key1</span> === <span class="hljs-variable">$key2</span>){
        <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
    }
    <span class="hljs-keyword">return</span> (<span class="hljs-variable">$key1</span> &gt; <span class="hljs-variable">$key2</span>)? <span class="hljs-number">1</span>:-<span class="hljs-number">1</span>;
}
<span class="hljs-variable">$array</span> = array_diff_ukey(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>, <span class="hljs-string">"funcionComparacion"</span>);
var_dump(<span class="hljs-variable">$array</span>);
<span class="hljs-comment">/*
Devuelve
array (size=4)
  'chimpancé' =&gt; string 'Muggles' (length=7)
  'chinchilla' =&gt; string 'Herminia' (length=8)
  1 =&gt; string 'Muggles' (length=7)
  'oso' =&gt; string 'Tarzan' (length=6)
 */</span></code></pre>
<h3>2. Unir arrays</h3>
<p>Para <strong>unir dos arrays en PHP</strong> se pueden emplear diferentes métodos:</p>
<ul>
<li>Operador suma</li>
</ul>
<p>Con el <strong>operador de suma +</strong> se eliminan los elementos duplicados que aparecen en el array a la derecha del operador.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Munchkin"</span>, <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Paradise"</span>, <span class="hljs-string">"Sailor"</span>, <span class="hljs-number">1</span> =&gt; <span class="hljs-string">"Rudolf"</span>);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"cocodrilo"</span> =&gt; <span class="hljs-string">"Romeo"</span>, <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Peach"</span>, <span class="hljs-number">1</span> =&gt; <span class="hljs-string">"Peter"</span>, <span class="hljs-string">"Sailor"</span>);

<span class="hljs-variable">$union</span> = <span class="hljs-variable">$animales</span> + <span class="hljs-variable">$animales2</span>;
var_dump(<span class="hljs-variable">$union</span>);
<span class="hljs-comment">/*
array (size=6)
  'perro' =&gt; string 'Munchkin' (length=8)
  'gato' =&gt; string 'Paradise' (length=8)
  0 =&gt; string 'Sailor' (length=6)
  1 =&gt; string 'Rudolf' (length=6)
  'cocodrilo' =&gt; string 'Romeo' (length=5)
  2 =&gt; string 'Sailor' (length=6)
*/</span></code></pre>
<p>Si el <em>key</em> ya está cogido no lo incluye en <em>$union</em>, independientemente del valor.</p>
<ul>
<li>array_merge
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_merge (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span> [, <span class="hljs-keyword">array</span> $... ])</code></pre></li>
</ul>
<p>Combina dos o más arrays, de modo que <strong>los valores de uno se unen al final del anterior</strong>. Devuelve el array resultante. Al contrario que con el operador suma, <strong>si los arrays de entrada tienen las mismas keys de tipo string</strong>, el último valor para esa key sobreescribirá al anterior. Pero <strong>si son arrays numéricas</strong>, el último valor no sobreescribirá al valor original, sino que se añadirá al final.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Munchkin"</span>, <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Paradise"</span>, <span class="hljs-number">1</span> =&gt; <span class="hljs-string">"Rudolf"</span>, <span class="hljs-string">"Sailor"</span>);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"cocodrilo"</span> =&gt; <span class="hljs-string">"Romeo"</span>, <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Peach"</span>, <span class="hljs-number">1</span> =&gt; <span class="hljs-string">"Peter"</span>, <span class="hljs-string">"Sailor"</span>);

<span class="hljs-variable">$union</span> = array_merge(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>);
var_dump(<span class="hljs-variable">$union</span>);
<span class="hljs-comment">/*
 Devuelve:
array (size=7)
  'perro' =&gt; string 'Peach' (length=5)
  'gato' =&gt; string 'Paradise' (length=8)
  0 =&gt; string 'Sailor' (length=6)
  1 =&gt; string 'Rudolf' (length=6)
  'cocodrilo' =&gt; string 'Romeo' (length=5)
  2 =&gt; string 'Peter' (length=5)
  3 =&gt; string 'Sailor' (length=6)
*/</span></code></pre>
<ul>
<li>array_merge_recursive
<pre><code class="hljs php"><span class="hljs-keyword">array</span> ​array_merge_recursive (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array1</span> [, <span class="hljs-keyword">array</span> $... ])</code></pre></li>
</ul>
<p>Es igual que _<strong>array_merge()</strong>_, salvo que cuando los arrays de entrada tienen las <strong>mismas keys de tipo string</strong>, los valores de estas keys se unen en un array de forma recursiva, de forma que si uno de los valores es un array, la función unirá también ésta con la correspondiente entrada de otro array. Si los arrays tienen la <strong>misma key numérica</strong>, el valor posterior no sobreescribirá el valor original, sino que se añadirá al final.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Munchkin"</span>, <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Paradise"</span>, <span class="hljs-number">1</span> =&gt; <span class="hljs-string">"Rudolf"</span>, <span class="hljs-string">"Sailor"</span>);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"cocodrilo"</span> =&gt; <span class="hljs-string">"Romeo"</span>, <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Peach"</span>, <span class="hljs-number">1</span> =&gt; <span class="hljs-string">"Peter"</span>, <span class="hljs-string">"Sailor"</span>);

<span class="hljs-variable">$union</span> = array_merge_recursive(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>);
var_dump(<span class="hljs-variable">$union</span>);
<span class="hljs-comment">/*
array (size=7)
  'perro' =&gt;
    array (size=2)
      0 =&gt; string 'Munchkin' (length=8)
      1 =&gt; string 'Peach' (length=5)
  'gato' =&gt; string 'Paradise' (length=8)
  0 =&gt; string 'Rudolf' (length=6)
  1 =&gt; string 'Sailor' (length=6)
  'cocodrilo' =&gt; string 'Romeo' (length=5)
  2 =&gt; string 'Peter' (length=5)
  3 =&gt; string 'Sailor' (length=6)
 */</span></code></pre>
<ul>
<li>array_combine
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_combine (<span class="hljs-keyword">array</span> <span class="hljs-variable">$keys</span>, <span class="hljs-keyword">array</span> <span class="hljs-variable">$values</span> )</code></pre></li>
</ul>
<p>Crea un array utilizando un array para sus <em>keys</em> y otro array para sus <em>values</em>. Coge los <em><strong>values</strong></em> de los arrays de origen, independientemente de que sean numéricos o asociativos.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">'perro'</span>, <span class="hljs-string">'gato'</span>, <span class="hljs-string">'leon'</span>);
<span class="hljs-variable">$nombres</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">'Jerry'</span>, <span class="hljs-string">'Lord'</span>, <span class="hljs-string">'Jesus'</span>);
<span class="hljs-variable">$array</span> = array_combine(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$nombres</span>);
var_dump(<span class="hljs-variable">$array</span>);
<span class="hljs-comment">/*
array (size=3)
  'perro' =&gt; string 'Jerry' (length=5)
  'gato' =&gt; string 'Lord' (length=4)
  'leon' =&gt; string 'Jesus' (length=5)
*/</span></code></pre>
<h3>3. Ordenar arrays</h3>
<p>Las <strong>funciones de ordenación de arrays</strong> actúan directamente en el mismo array, en vez de crear uno nuevo ordenado. Algunas de las funciones se basan en las <em><strong>keys</strong></em> del array, otras en sus <em><strong>values</strong></em>. El <strong>orden de clasificación</strong> que llevan es: alfabético, de menor a mayor, de mayor a menor, numérico, natural, aleatorio o definido por el usuario.</p>
<p>Cuando se mantiene una <strong>asociación entre <em>key</em> y <em>values</em> después de la clasificación</strong>, las <em><strong>keys</strong></em> se reestablecen numéricamente.</p>
<p><strong>Tabla de funciones para ordenar arrays</strong>:</p>
<table>
<thead>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Nombre de la función</strong></td>
<td><strong>Ordena por</strong></td>
<td><strong>Mantiene asociación con las key</strong></td>
<td><strong>Orden de clasificación</strong></td>
</tr>
<tr>
<td><strong>sort()</strong></td>
<td>valor</td>
<td>no</td>
<td>Menor a mayor</td>
</tr>
<tr>
<td>rsort()</td>
<td>valor</td>
<td>no</td>
<td>Mayor a menor</td>
</tr>
<tr>
<td><strong>asort()</strong></td>
<td>valor</td>
<td>sí</td>
<td>Menor a mayor</td>
</tr>
<tr>
<td>arsort()</td>
<td>valor</td>
<td>sí</td>
<td>Mayor a menor</td>
</tr>
<tr>
<td><strong>ksort()</strong></td>
<td>key</td>
<td>sí</td>
<td>Menor a mayor</td>
</tr>
<tr>
<td>krsort()</td>
<td>key</td>
<td>sí</td>
<td>Mayor a menor</td>
</tr>
<tr>
<td><strong>usort()</strong></td>
<td>valor</td>
<td>no</td>
<td>Definido por el usuario</td>
</tr>
<tr>
<td>uasort()</td>
<td>valor</td>
<td>sí</td>
<td>Definido por el usuario</td>
</tr>
<tr>
<td>uksort()</td>
<td>key</td>
<td>sí</td>
<td>Definido por el usuario</td>
</tr>
<tr>
<td><strong>natsort()</strong></td>
<td>valor</td>
<td>sí</td>
<td>Natural</td>
</tr>
<tr>
<td>natcasesort()</td>
<td>valor</td>
<td>sí</td>
<td>Natural (case insensitive)</td>
</tr>
<tr>
<td><strong>shuffle()</strong></td>
<td>valor</td>
<td>no</td>
<td>Aleatorio</td>
</tr>
<tr>
<td><strong>array_multisort()</strong></td>
<td>valor</td>
<td>sí (asociativa)</td>
<td>no (numérica). Primer array u opciones de clasificación</td>
</tr>
</tbody>
</table>
<ul>
<li>sort
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> sort (array &amp;<span class="hljs-variable">$array</span> [, int <span class="hljs-variable">$sort_flags</span> = SORT_REGULAR ])</code></pre></li>
</ul>
<p>Ordena un array de menor a mayor. El segundo parámetro es opcional y sirve para modificar la forma de orden:</p>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Modo de ordenación</strong></td>
<td><strong>Descripción</strong></td>
</tr>
<tr>
<td><strong>SORT_REGULAR</strong></td>
<td>Compara elementos <strong>normalmente</strong></td>
</tr>
<tr>
<td><strong>SORT_NUMERIC</strong></td>
<td>Compara elementos de <strong>forma numérica</strong></td>
</tr>
<tr>
<td><strong>SORT_STRING</strong></td>
<td>Compara elementos como <strong>cadenas</strong></td>
</tr>
<tr>
<td><strong>SORT_NATURAL</strong></td>
<td>Compara elementos como cadenas usando el orden natural como <em><strong>natsort()</strong></em></td>
</tr>
<tr>
<td><strong>SORT_LOCALE_STRING</strong></td>
<td>Compara elementos como cadenas basándose en la <strong>configuración regional</strong> en uso</td>
</tr>
<tr>
<td><strong>SORT_FLAG_CASE</strong></td>
<td>Se puede combinar con SORT_STRING o SORT_NATURAL para ordenar <strong>cadenas</strong> de forma <strong>insensible a mayúsculas y minúsculas</strong></td>
</tr>
</tbody>
</table>
<p>Devuelve <strong>true</strong> en caso de éxito y <strong>false</strong> en caso de error. La función asigna <strong>nuevas <em>keys</em></strong> a los elementos del array, por lo que borra las anteriores.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Munchkin"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"paradise"</span>,
    <span class="hljs-string">"cocodrilo"</span> =&gt; <span class="hljs-string">"Romeo"</span>,
    <span class="hljs-string">"avestruz"</span> =&gt; <span class="hljs-string">"jordan"</span>
);
sort(<span class="hljs-variable">$animales</span>);
var_dump(<span class="hljs-variable">$animales</span>);
<span class="hljs-comment">/*
array (size=4)
  0 =&gt; string 'Munchkin' (length=8)
  1 =&gt; string 'Romeo' (length=5)
  2 =&gt; string 'jordan' (length=6)
  3 =&gt; string 'paradise' (length=8)
*/</span></code></pre>
<p>Ahora vamos a ordenar de forma natural e insensible a mayúsculas y minúsculas:</p>
<pre><code class="hljs php">sort(<span class="hljs-variable">$animales</span>, SORT_NATURAL | SORT_FLAG_CASE);
var_dump(<span class="hljs-variable">$animales</span>);
<span class="hljs-comment">/*
 Devuelve:
array (size=4)
  0 =&gt; string 'jordan' (length=6)
  1 =&gt; string 'Munchkin' (length=8)
  2 =&gt; string 'paradise' (length=8)
  3 =&gt; string 'Romeo' (length=5)
*/</span></code></pre>
<ul>
<li>asort
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> asort (array &amp;<span class="hljs-variable">$array</span> [, int <span class="hljs-variable">$sort_flags</span> = SORT_REGULAR ])</code></pre></li>
</ul>
<p>Ordena los <em>values</em> de un array manteniendo los <em><strong>keys</strong></em> con los que están asociados. </p>
<p>Devuelve <strong>true</strong> en caso de éxito o <strong>false</strong> en caso de error.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Munchkin"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Paradise"</span>,
    <span class="hljs-string">"cocodrilo"</span> =&gt; <span class="hljs-string">"Romeo"</span>,
    <span class="hljs-string">"avestruz"</span> =&gt; <span class="hljs-string">"Jordan"</span>
);
asort(<span class="hljs-variable">$animales</span>);
var_dump(<span class="hljs-variable">$animales</span>);
<span class="hljs-comment">/*
 array (size=4)
  'avestruz' =&gt; string 'Jordan' (length=6)
  'perro' =&gt; string 'Munchkin' (length=8)
  'gato' =&gt; string 'Paradise' (length=8)
  'cocodrilo' =&gt; string 'Romeo' (length=5)
 */</span></code></pre>
<ul>
<li>ksort
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> ksort (array &amp;<span class="hljs-variable">$array</span> [, int <span class="hljs-variable">$sort_flags</span> = SORT_REGULAR ] )</code></pre></li>
</ul>
<p>Ordena un <em>array</em> por sus <em><strong>keys</strong></em>. Devuelve <strong>true</strong> en caso de éxito o <strong>false</strong> en caso de error. </p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Munchkin"</span>,
    <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Paradise"</span>,
    <span class="hljs-string">"cocodrilo"</span> =&gt; <span class="hljs-string">"Romeo"</span>,
    <span class="hljs-string">"avestruz"</span> =&gt; <span class="hljs-string">"Jordan"</span>
);
ksort(<span class="hljs-variable">$animales</span>);
var_dump(<span class="hljs-variable">$animales</span>);
<span class="hljs-comment">/*
array (size=4)
  'avestruz' =&gt; string 'Jordan' (length=6)
  'cocodrilo' =&gt; string 'Romeo' (length=5)
  'gato' =&gt; string 'Paradise' (length=8)
  'perro' =&gt; string 'Munchkin' (length=8)
 */</span></code></pre>
<ul>
<li>usort
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> usort (array &amp;<span class="hljs-variable">$array</span>, callable <span class="hljs-variable">$value_compare_func</span> )</code></pre></li>
</ul>
<p>Ordena un array en función de sus valores mediante una <strong>función de comparación</strong> definida por el usuario. Asigna <strong>nuevas <em>keys</em></strong> a los elementos del array, por lo que borra los anteriores.</p>
<p>Es similar a las funciones _array_diff<em>uassoc</em> y _array_diff<em>ukey</em> en el sentido de que acepta una <strong>función callable</strong> para comparar los valores. </p>
<p>Ejemplo de usort utilizando un <strong>array multidimensional</strong>:</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-number">0</span> =&gt; <span class="hljs-keyword">array</span>(<span class="hljs-string">"mascota"</span> =&gt; <span class="hljs-string">"perro"</span>),
    <span class="hljs-number">1</span> =&gt; <span class="hljs-keyword">array</span>(<span class="hljs-string">"mascota"</span> =&gt; <span class="hljs-string">"gato"</span>),
    <span class="hljs-number">2</span> =&gt; <span class="hljs-keyword">array</span>(<span class="hljs-string">"mascota"</span> =&gt; <span class="hljs-string">"liebre"</span>),
    <span class="hljs-number">3</span> =&gt; <span class="hljs-keyword">array</span>(<span class="hljs-string">"mascota"</span> =&gt; <span class="hljs-string">"cerdo"</span>),
);
<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">funcionComparacion</span><span class="hljs-params">(<span class="hljs-variable">$x</span>, <span class="hljs-variable">$y</span>)</span>
</span>{
  <span class="hljs-keyword">return</span> strcmp(<span class="hljs-variable">$x</span>[<span class="hljs-string">"mascota"</span>], <span class="hljs-variable">$y</span>[<span class="hljs-string">"mascota"</span>]);
}
usort(<span class="hljs-variable">$animales</span>, <span class="hljs-string">"funcionComparacion"</span>);
<span class="hljs-keyword">while</span> (<span class="hljs-keyword">list</span>(<span class="hljs-variable">$clave</span>, <span class="hljs-variable">$valor</span>) = each(<span class="hljs-variable">$animales</span>)) {
  <span class="hljs-keyword">echo</span> <span class="hljs-string">"\$mascota[$clave]: "</span> . <span class="hljs-variable">$valor</span>[<span class="hljs-string">"mascota"</span>] . <span class="hljs-string">"\n"</span>;
} <span class="hljs-comment">// $mascota[0]: cerdo $mascota[1]: gato $mascota[2]: liebre $mascota[3]: perro</span></code></pre>
<p>Otro ejemplo de <em>usort()</em> con una <strong>función estática dentro de una clase</strong>, cada instancia de la clase será un <strong>elemento del array</strong>:</p>
<pre><code class="hljs php"><span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">Fauna</span> </span>{
  <span class="hljs-keyword">public</span> <span class="hljs-variable">$nombre</span>;
  <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">__construct</span><span class="hljs-params">(<span class="hljs-variable">$nombre</span>)</span>
  </span>{
    <span class="hljs-variable">$this</span>-&gt;nombre = <span class="hljs-variable">$nombre</span>;
  }
  <span class="hljs-comment">/* Ésta es la función de comparación estática: */</span>
  <span class="hljs-keyword">static</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">funcionComparacion</span><span class="hljs-params">(<span class="hljs-variable">$x</span>, <span class="hljs-variable">$y</span>)</span>
  </span>{
    <span class="hljs-variable">$al</span> = strtolower(<span class="hljs-variable">$x</span>-&gt;nombre);
    <span class="hljs-variable">$bl</span> = strtolower(<span class="hljs-variable">$y</span>-&gt;nombre);
    <span class="hljs-keyword">if</span> (<span class="hljs-variable">$al</span> == <span class="hljs-variable">$bl</span>) {
      <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
    }
    <span class="hljs-keyword">return</span> (<span class="hljs-variable">$al</span> &gt; <span class="hljs-variable">$bl</span>) ? +<span class="hljs-number">1</span> : -<span class="hljs-number">1</span>;
  }
}
<span class="hljs-variable">$animales</span>[] = <span class="hljs-keyword">new</span> Fauna(<span class="hljs-string">"Perro"</span>);
<span class="hljs-variable">$animales</span>[] = <span class="hljs-keyword">new</span> Fauna(<span class="hljs-string">"Gato"</span>);
<span class="hljs-variable">$animales</span>[] = <span class="hljs-keyword">new</span> Fauna(<span class="hljs-string">"Conejo"</span>);
<span class="hljs-variable">$animales</span>[] = <span class="hljs-keyword">new</span> Fauna(<span class="hljs-string">"Elefante"</span>);

usort(<span class="hljs-variable">$animales</span>, <span class="hljs-keyword">array</span>(<span class="hljs-string">"Fauna"</span>, <span class="hljs-string">"funcionComparacion"</span>));

<span class="hljs-keyword">foreach</span> (<span class="hljs-variable">$animales</span> <span class="hljs-keyword">as</span> <span class="hljs-variable">$animal</span>) {
  <span class="hljs-keyword">echo</span> <span class="hljs-variable">$animal</span>-&gt;nombre . <span class="hljs-string">"\n"</span>;
} <span class="hljs-comment">// Devuelve: Conejo Elefante Gato Perro</span></code></pre>
<ul>
<li>natsort
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> natsort (array &amp;<span class="hljs-variable">$array</span>)</code></pre></li>
</ul>
<p>Ordena un array usando un algoritmo de orden natural, simulando a como lo haría un humano. Mantiene las asociaciones <em><strong>key</strong></em> =&gt; <em><strong>value</strong></em>. Devuelve <strong>true</strong> en caso de éxito o <strong>false</strong> en caso de error. Tiene el mismo comportamiento que la función <em>strnatcmp()</em> de strings. </p>
<pre><code class="hljs php"><span class="hljs-variable">$arr1</span> = <span class="hljs-variable">$arr2</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"img22.png"</span>, <span class="hljs-string">"img8.png"</span>, <span class="hljs-string">"img2.png"</span>, <span class="hljs-string">"img10"</span>);
asort(<span class="hljs-variable">$arr1</span>);
print_r(<span class="hljs-variable">$arr1</span>);
<span class="hljs-comment">/*
Array
(
    [3] =&gt; img10
    [2] =&gt; img2.png
    [0] =&gt; img22.png
    [1] =&gt; img8.png
)
 */</span>
natsort(<span class="hljs-variable">$arr2</span>);
print_r(<span class="hljs-variable">$arr2</span>);
<span class="hljs-comment">/*
 Devuelve:
Array
(
    [2] =&gt; img2.png
    [1] =&gt; img8.png
    [3] =&gt; img10
    [0] =&gt; img22.png
)
*/</span></code></pre>
<ul>
<li>shuffle
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> shuffle (array &amp;<span class="hljs-variable">$array</span>)</code></pre></li>
</ul>
<p>Crea un orden aleatorio de los elementos de un array. Asigna nuevos <em>keys</em> a los elementos.</p>
<pre><code class="hljs php"><span class="hljs-variable">$numeros</span> = range(<span class="hljs-number">1</span>,<span class="hljs-number">5</span>);
shuffle(<span class="hljs-variable">$numeros</span>);
print_r(<span class="hljs-variable">$numeros</span>);
<span class="hljs-comment">/*
Devuelve:
Array
(
    [0] =&gt; 2
    [1] =&gt; 1
    [2] =&gt; 3
    [3] =&gt; 5
    [4] =&gt; 4
)
*/</span></code></pre>
<ul>
<li>array_multisort
<pre><code class="hljs nginx"><span class="hljs-title">bool</span> array_multisort (array &amp;<span class="hljs-variable">$array1</span> [, mixed <span class="hljs-variable">$array1_sort_order</span> = SORT_ASC [, mixed <span class="hljs-variable">$array1_sort_flags</span> = SORT_REGULAR [, mixed $... ]]] )</code></pre></li>
</ul>
<p>Ordena <strong>varios <em>arrays</em> a la vez</strong>, o un <strong>array multidimensional</strong> con diferentes niveles.</p>
<p>Las <strong><em>keys</em> asociativas</strong> se mantienen mientras que las <strong>numéricas</strong> se reindexan.</p>
<p>El parámetro opcional _$array1_sort<em>order</em> indica si el orden será ascendente SORT_ASC o descendente SORT<em>DESC. </em>$array1_sort<em>flags</em> permite indicar el modo de ordenación: SORT_NUMERIC, SORT_STRING... Con las mismas opciones que con la función <em>sort()</em>. </p>
<p>Igual que las funciones anteriores, el <strong>array se pasa por referencia a la función</strong>, y ésta devuelve <strong>true</strong> en caso de éxito y <strong>false</strong> en caso de error. </p>
<p>Los <em>arrays</em> <strong>deben tener el mismo número de elementos</strong>. Se ordena el primer array, y los demás arrays se ordenarán en función del orden que se ha establecido a los valores del primero:</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"oso"</span>, <span class="hljs-string">"perro"</span>, <span class="hljs-string">"camaleón"</span>);
<span class="hljs-variable">$animales2</span> = <span class="hljs-keyword">array</span> (<span class="hljs-string">"gato"</span>, <span class="hljs-string">"liebre"</span>, <span class="hljs-string">"serpiente"</span>);

array_multisort(<span class="hljs-variable">$animales</span>, <span class="hljs-variable">$animales2</span>);

var_dump(<span class="hljs-variable">$animales</span>);
<span class="hljs-comment">/*
 Orden alfabético
 array (size=3)
  0 =&gt; string 'camaleón' (length=9)
  1 =&gt; string 'oso' (length=3)
  2 =&gt; string 'perro' (length=5)
 */</span>
var_dump(<span class="hljs-variable">$animales2</span>);
<span class="hljs-comment">/*
 Orden en función del orden que se ha establecido a $animales
 array (size=3)
  0 =&gt; string 'serpiente' (length=9)
  1 =&gt; string 'gato' (length=4)
  2 =&gt; string 'liebre' (length=6)
 */</span></code></pre>
<p>Los arrays se ordenan como si se tratara de un Excel, <strong>cada array es una columna</strong>. Todos los arrays se ordenan en función del primero, y si dos o más elementos del array son idénticos, se ordenan en función del segundo array dado, y así con los demás arrays. Esto se ve más claro con un array en el que coinciden valores, en ese caso se ordenarán en función de las directrices del segundo array:</p>
<pre><code class="hljs php"><span class="hljs-variable">$miArray</span> = <span class="hljs-keyword">array</span>(
    <span class="hljs-keyword">array</span>(<span class="hljs-string">"10"</span>, <span class="hljs-number">11</span>, <span class="hljs-number">100</span>, <span class="hljs-number">100</span>, <span class="hljs-number">100</span>, <span class="hljs-number">100</span>, <span class="hljs-string">"a"</span>),
    <span class="hljs-keyword">array</span>(   <span class="hljs-number">1</span>,  <span class="hljs-number">2</span>, <span class="hljs-string">"2"</span>,   <span class="hljs-number">3</span>,   <span class="hljs-number">4</span>,   <span class="hljs-number">8</span>,   <span class="hljs-number">1</span>)
);
array_multisort(<span class="hljs-variable">$miArray</span>[<span class="hljs-number">0</span>], SORT_ASC, SORT_STRING,
    <span class="hljs-variable">$miArray</span>[<span class="hljs-number">1</span>], SORT_NUMERIC, SORT_DESC);
var_dump(<span class="hljs-variable">$miArray</span>);
<span class="hljs-comment">/*
 El primer subarray se ordena de forma ascendente comparando elementos como strings:
 array (size=2)
  0 =&gt;
    array (size=7)
      0 =&gt; string '10' (length=2)
      1 =&gt; int 100
      2 =&gt; int 100
      3 =&gt; int 100
      4 =&gt; int 100
      5 =&gt; int 11
      6 =&gt; string 'a' (length=1)
El segundo subarray se ordena con el orden del primero, pero si coinciden valores,
se ordenan de forma numérica y con orden descendente. En este caso coincide 100,
y ordena de forma numérica 8 &gt; 4 &gt; 3 &gt; "2":
  1 =&gt;
    array (size=7)
      0 =&gt; int 1
      1 =&gt; int 8
      2 =&gt; int 4
      3 =&gt; int 3
      4 =&gt; string '2' (length=1)
      5 =&gt; int 2
      6 =&gt; int 1
 */</span></code></pre>
<h3>4. Rellenar arrays</h3>
<p>Las siguientes funciones se utilizan para rellenar arrays:</p>
<ul>
<li>array_fill
<pre><code class="hljs nginx"><span class="hljs-title">array</span> array_fill (int <span class="hljs-variable">$start_index</span>, int <span class="hljs-variable">$num</span>, mixed <span class="hljs-variable">$value</span>)</code></pre></li>
</ul>
<p>Llena un array <em>$num</em> veces (debe ser mayor que cero) con el valor <em>$value</em> desde el key _$start<em>index</em>. Si _$start<em>index</em> es negativo, el primer valor tendrá como key ese valor negativo y los demás comenzarán desde cero.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animal</span> = array_fill(<span class="hljs-number">3</span>, <span class="hljs-number">2</span>, <span class="hljs-string">'perro'</span>);
var_dump(<span class="hljs-variable">$animal</span>);
<span class="hljs-comment">/*
array (size=2)
  3 =&gt; string 'perro' (length=5)
  4 =&gt; string 'perro' (length=5)
*/</span>
<span class="hljs-variable">$animal</span> = array_fill(-<span class="hljs-number">7</span>, <span class="hljs-number">3</span>, <span class="hljs-string">'gato'</span>);
var_dump(<span class="hljs-variable">$animal</span>);
<span class="hljs-comment">/*
array (size=3)
  -7 =&gt; string 'gato' (length=4)
  0 =&gt; string 'gato' (length=4)
  1 =&gt; string 'gato' (length=4)
*/</span></code></pre>
<ul>
<li>range
<pre><code class="hljs nginx"><span class="hljs-title">array</span> range (mixed <span class="hljs-variable">$start</span>, mixed <span class="hljs-variable">$end</span> [, number <span class="hljs-variable">$step</span> = <span class="hljs-number">1</span> ])</code></pre></li>
</ul>
<p>Crea un array que contiene un rango de elementos. <em>$start</em> es el valor con el que empieza, <em>$end</em> el valor en el que acaba, y <em>$step</em> es un número opcional que permite modificar el incremento de elemento a elemento.</p>
<p>En el caso de usar letras está limitada a emplear sólo un carácter, si se emplea más de uno, sólo tiene en cuenta el primero.</p>
<pre><code class="hljs php"><span class="hljs-variable">$numeros</span> = range(<span class="hljs-number">0</span>, <span class="hljs-number">10</span>, <span class="hljs-number">2</span>);
var_dump(<span class="hljs-variable">$numeros</span>);
<span class="hljs-comment">/*
array (size=6)
  0 =&gt; int 0
  1 =&gt; int 2
  2 =&gt; int 4
  3 =&gt; int 6
  4 =&gt; int 8
  5 =&gt; int 10
 */</span>
<span class="hljs-variable">$letras</span> = range(<span class="hljs-string">'a'</span>, <span class="hljs-string">'d'</span>);
var_dump(<span class="hljs-variable">$letras</span>);
<span class="hljs-comment">/*
array (size=4)
  0 =&gt; string 'a' (length=1)
  1 =&gt; string 'b' (length=1)
  2 =&gt; string 'c' (length=1)
  3 =&gt; string 'd' (length=1)
 */</span></code></pre>
<h3>5. Dividir arrays</h3>
<p>Existen diferentes <strong>funciones que sirven para dividir un array en partes</strong>:</p>
<ul>
<li>array_slice
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_slice (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array</span>, int <span class="hljs-variable">$offset</span> [, int <span class="hljs-variable">$length</span> = <span class="hljs-keyword">null</span> [, bool <span class="hljs-variable">$preserve_keys</span> = <span class="hljs-keyword">false</span> ]])</code></pre></li>
</ul>
<p>Extrae una parte de un array, que comienza en <em>$offset</em> (si es negativo comienza por el final) y con una longitud de <em>$length</em>.</p>
<p>Si <em>$length</em> es <strong>positivo</strong>, la secuencia tendrá tantos elementos como indique el valor. Si es mayor que el propio <em>array</em>, se devolverán los elementos disponibles en el array. Si es <strong>negativo</strong>, la secuencia terminará en tantos elementos comenzando por el final del array. Si se omite, contendrá todos los elementos del array desde <em>$offset</em>.</p>
<p>El parámetro opcional _$preserve<em>keys</em> reiniciará los <strong>índices numéricos</strong> de forma predeterminada. Se pueden preservar cambiándolo a <strong>true</strong>. </p>
<pre><code class="hljs php"><span class="hljs-variable">$entrada</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"a"</span>, <span class="hljs-string">"b"</span>, <span class="hljs-string">"c"</span>, <span class="hljs-string">"d"</span>, <span class="hljs-string">"e"</span>);

<span class="hljs-variable">$salida</span> = array_slice(<span class="hljs-variable">$entrada</span>, <span class="hljs-number">2</span>);      <span class="hljs-comment">// "c", "d", y "e"</span>
<span class="hljs-variable">$salida</span> = array_slice(<span class="hljs-variable">$entrada</span>, -<span class="hljs-number">2</span>, <span class="hljs-number">1</span>);  <span class="hljs-comment">// "d"</span>
<span class="hljs-variable">$salida</span> = array_slice(<span class="hljs-variable">$entrada</span>, <span class="hljs-number">0</span>, <span class="hljs-number">3</span>);   <span class="hljs-comment">// "a", "b", y "c"</span>

<span class="hljs-comment">// Observa las diferencias en las claves de los arrays:</span>
var_dump(<span class="hljs-variable">$salida</span> = array_slice(<span class="hljs-variable">$entrada</span>, <span class="hljs-number">2</span>, -<span class="hljs-number">1</span>)); <span class="hljs-comment">// Devuelve [0]=&gt;c, [1]=&gt;d</span>
var_dump(<span class="hljs-variable">$salida</span> = array_slice(<span class="hljs-variable">$entrada</span>, <span class="hljs-number">2</span>, -<span class="hljs-number">1</span>, <span class="hljs-keyword">true</span>)); <span class="hljs-comment">// Devuelve [2]=&gt;c, [3]=&gt;d</span></code></pre>
<ul>
<li>array_splice
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_splice (<span class="hljs-keyword">array</span> &amp;<span class="hljs-variable">$input</span>, int <span class="hljs-variable">$offset</span> [, int <span class="hljs-variable">$length</span> [, mixed <span class="hljs-variable">$replacement</span> = <span class="hljs-keyword">array</span>() ]] )</code></pre></li>
</ul>
<p>Elimina una porción del array y la reemplaza por algo. Comienza la eliminación desde <em>$offset</em> (si es negativo, comienza por el final).</p>
<p>Si se omite <em>$length</em>, se elimina todo desde <em>$offset</em> hasta el final del array. Si es <strong>positivo</strong>, se eliminan tantos elementos como indique su longitud. Si es <strong>negativo</strong>, el final de la porción eliminada será de tantos elementos como indique la longitud desde el final del array. Si es cero no se elimina ningún elemento. </p>
<p>Si se especifica el array <em>$replacement</em>, los elementos eliminados se reemplazarán por los elementos de este array. </p>
<p>Para eliminar todo desde <em>$offset</em> hasta el final de array cuando se ha especificado $replacement, se puede utilizar count(<em>$input</em>) para <em>$length</em>.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);
array_splice(<span class="hljs-variable">$animales</span>, <span class="hljs-number">2</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve perro, gato</span>

<span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);
array_splice(<span class="hljs-variable">$animales</span>, <span class="hljs-number">1</span>, -<span class="hljs-number">1</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve perro, toro</span>

<span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);
array_splice(<span class="hljs-variable">$animales</span>, <span class="hljs-number">1</span>, count(<span class="hljs-variable">$animales</span>), <span class="hljs-string">"rinoceronte"</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve perro, rinoceronte</span>

<span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);
array_splice(<span class="hljs-variable">$animales</span>, -<span class="hljs-number">4</span>, <span class="hljs-number">2</span>, <span class="hljs-string">"ardilla"</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve perro, ardilla, oso, toro</span>

<span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);
array_splice(<span class="hljs-variable">$animales</span>, -<span class="hljs-number">4</span>, <span class="hljs-number">0</span>, <span class="hljs-string">"koala"</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve perro, koala, gato, avestruz, oso, toro</span></code></pre>
<ul>
<li>array_chunk
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_chunk (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array</span>, int <span class="hljs-variable">$size</span> [, bool <span class="hljs-variable">$preserve_keys</span> = <span class="hljs-keyword">false</span> ])</code></pre></li>
</ul>
<p>Divide un array en fragmentos de tamaño <em>$size</em>. El último fragmento puede contener menos elementos que size. </p>
<p>Si _$preserve<em>keys</em> es true se mantienen las <em>keys</em>, sino se reindexa numéricamente.</p>
<p>Devuelve un <strong>array multidimensional indexado numéricamente</strong>, empezando desde cero. </p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);
<span class="hljs-variable">$animales2</span> = array_chunk(<span class="hljs-variable">$animales</span>, <span class="hljs-number">2</span>);
var_dump(<span class="hljs-variable">$animales2</span>);
<span class="hljs-comment">/*
array (size=3)
  0 =&gt;
    array (size=2)
      0 =&gt; string 'perro' (length=5)
      1 =&gt; string 'gato' (length=4)
  1 =&gt;
    array (size=2)
      0 =&gt; string 'avestruz' (length=8)
      1 =&gt; string 'oso' (length=3)
  2 =&gt;
    array (size=1)
      0 =&gt; string 'toro' (length=4)
*/</span></code></pre>
<h3>6. Modificar elementos en arrays</h3>
<p>Las siguientes son funciones que modifican los elementos de un array:</p>
<ul>
<li>array_shift
<pre><code class="hljs nginx"><span class="hljs-title">mixed</span> array_shift (array &amp;<span class="hljs-variable">$array</span>)</code></pre></li>
</ul>
<p>Quita el primer valor del <em>$array</em> y lo devuelve. Los <strong>arrays asociativos</strong> no varían sus keys, mientras que los <strong>numéricos</strong> son reindexados y comienzan de cero.</p>
<p>Esta función después de usarse ejecuta <em>reset()</em> en el array.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>, <span class="hljs-string">"oso"</span>, <span class="hljs-string">"toro"</span>);

<span class="hljs-variable">$unAnimal</span> = array_shift(<span class="hljs-variable">$animales</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve el array $animales pero sin "perro"</span>
var_dump(<span class="hljs-variable">$unAnimal</span>); <span class="hljs-comment">// Devuelve el string "perro"</span></code></pre>
<ul>
<li>array_unshift
<pre><code class="hljs nginx"><span class="hljs-title">int</span> array_unshift (array &amp;<span class="hljs-variable">$array</span>, mixed <span class="hljs-variable">$value1</span> [, mixed $... ])</code></pre></li>
</ul>
<p>Añade los valores <em>$value</em> al <strong>inicio del <em>array</em></strong>. Igual que en _array<em>shift()</em>, en los <strong>arrays asociativos</strong> no varían sus keys, mientras que los <strong>numéricos</strong> se reindexan.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>);

<span class="hljs-variable">$masAnimales</span> = array_unshift(<span class="hljs-variable">$animales</span>, <span class="hljs-string">"delfin"</span>, <span class="hljs-string">"ballena"</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve el array $animales con delfín y ballena al principio</span>
var_dump(<span class="hljs-variable">$masAnimales</span>); <span class="hljs-comment">// Devuelve el integer 5 (total de elementos del array)</span></code></pre>
<ul>
<li>array_pop
<pre><code class="hljs nginx"><span class="hljs-title">mixed</span> array_pop (array &amp;<span class="hljs-variable">$array</span>)</code></pre></li>
</ul>
<p>Quita el último valor del array y lo devuelve.</p>
<p>Esta función después de usarse ejecuta <em>reset()</em> en el array.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>);

<span class="hljs-variable">$unAnimal</span> = array_pop(<span class="hljs-variable">$animales</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve el array con perro, gato</span>
var_dump(<span class="hljs-variable">$unAnimal</span>); <span class="hljs-comment">// Devuelve el string avestruz</span></code></pre>
<ul>
<li>array_push
<pre><code class="hljs nginx"><span class="hljs-title">int</span> array_push (array &amp;<span class="hljs-variable">$array</span>, mixed <span class="hljs-variable">$value1</span> [, mixed $... ])</code></pre></li>
</ul>
<p>Inserta uno o más elementos <strong>al final de un <em>array</em></strong>. Viene a ser lo mismo que insertar un elemento a un array <em>$array[] = valor</em>, pero se pueden insertar varios de vez. Si se inserta sólo un valor, es mejor utilizar la forma tradicional. </p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = <span class="hljs-keyword">array</span>(<span class="hljs-string">"perro"</span>, <span class="hljs-string">"gato"</span>, <span class="hljs-string">"avestruz"</span>);

<span class="hljs-variable">$masAnimales</span> = array_push(<span class="hljs-variable">$animales</span>, <span class="hljs-string">"delfin"</span>, <span class="hljs-string">"ballena"</span>);
var_dump(<span class="hljs-variable">$animales</span>); <span class="hljs-comment">// Devuelve el array $animales con delfín y ballena al final</span>
var_dump(<span class="hljs-variable">$masAnimales</span>); <span class="hljs-comment">// Devuelve el integer 5 (total de elementos del array)</span></code></pre>
<ul>
<li>array_flip
<pre><code class="hljs php"><span class="hljs-keyword">array</span> array_flip (<span class="hljs-keyword">array</span> <span class="hljs-variable">$array</span>)</code></pre></li>
</ul>
<p>Intercambia las <em>keys</em> de un array con sus <em>values</em>.</p>
<p>Los values del array tienen que ser válidos (de tipo <em>integer</em> o <em>string</em>), sino genera un <strong>warning</strong> y los elementos en cuestión no se incluirán en el resultado.</p>
<pre><code class="hljs php"><span class="hljs-variable">$animales</span> = [<span class="hljs-string">"perro"</span> =&gt; <span class="hljs-string">"Golden"</span>, <span class="hljs-string">"gato"</span> =&gt; <span class="hljs-string">"Mooky"</span>];
<span class="hljs-variable">$array</span> = array_flip(<span class="hljs-variable">$animales</span>);
var_dump(<span class="hljs-variable">$array</span>);
<span class="hljs-comment">/*
array (size=2)
  'Golden' =&gt; string 'perro' (length=5)
  'Mooky' =&gt; string 'gato' (length=4)
*/</span></code></pre>
    </div>

		</div>
		    <hr>
	</div>

</body>
<footer>
	
</footer>
</html>