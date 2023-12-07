<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="text">
        <p>In the <a href="https://www.geeksforgeeks.org/php/"><strong>PHP</strong></a> each and every property of a class in must have one of three visibility levels, known as <strong>public</strong>, <strong>private</strong>, and <strong>protected</strong>.<br>&nbsp;</p>
        <ul>
            <li><strong>Public: </strong>Public properties can be accessed by any code, whether that code is inside or outside the class. If a property is declared public, its value can be read or changed from anywhere in your script.</li>
            <li><strong>Private:</strong> Private properties of a class can be accessed only by code inside the class. So if we create a property that’s declared private, only methods and objects inside the same class can access its contents.</li>
            <li><strong>Protected:</strong> Protected class properties are a bit like private properties in that they can’t be accessed by code outside the class, but there’s one little difference in any class that inherits from the class i.e. base class can also access the properties.</li>
        </ul>
        <p>Generally speaking, it’s a good idea to avoid creating public properties wherever possible. Instead, it’s safer to create private properties, then to create methods that allow code outside the class to access those properties. This means that we can control exactly how our class’s properties are accessed.&nbsp;<br><strong>Note:</strong> If we attempt to access the property outside the class, PHP generates a fatal error.<br><strong>PHP Access Specifier’s feasibility with Class, Sub Class and Outside World :</strong><br>&nbsp;</p>
        <div id="GFG_AD_gfg_mobile_336x280"></div>
        <figure class="table">
            <table border="1">
                <tbody>
                    <tr>
                        <th>Class Member Access Specifier</th>
                        <th>Access from own class</th>
                        <th>Accessible from derived class</th>
                        <th>Accessible by Object</th>
                    </tr>
                    <tr>
                        <th>Private</th>
                        <th>Yes</th>
                        <th>No</th>
                        <th>No</th>
                    </tr>
                    <tr>
                        <th>Protected</th>
                        <th>Yes</th>
                        <th>Yes</th>
                        <th>No</th>
                    </tr>
                    <tr>
                        <th>Public</th>
                        <th>Yes</th>
                        <th>Yes</th>
                        <th>Yes</th>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Below examples illustrate the Access Specifier of PHP:&nbsp;<br>&nbsp;</p>
        <ul>
            <li><strong>Example 1:</strong> In this example, we will see the Public Access Specifier.&nbsp;<br>&nbsp;</li>
        </ul>
        <div class="responsive-tabs">
            <h2 class="tabtitle">php</h2>
            <div class="tabcontent">

                <div class="code-block">
                    <div class="code-gutter">
                        <div class="editor-buttons-container">
                            <div class="editor-buttons">
                                <div class="editor-buttons-div" title="Run and Edit">
                                    <i id="copy-code-button" title="Copy Code" class="gfg-icon gfg-icon_copy code-sidebar-button padding-2px copy-code-button"></i>
                                    <p></p>
                                    <div id="run-and-edit-loader" class="ring-load"></div>
                                    <p> <i id="run-and-edit-button" title="Edit Code" lang="php" class="gfg-icon gfg-icon_edit_1 padding-2px code-sidebar-button"></i><br>
                                        <i id="close-code-editor-button" title="Close Editor" class="gfg-icon gfg-icon_close-editor padding-2px code-sidebar-button close-code-editor-button"></i>
                                    </p>
                                    <div id="run-code-loader" class="ring-load"></div>
                                    <p> <i id="run-code-button" lang="php" title="Run Code and See Output" class="gfg-icon gfg-icon_play padding-2px code-sidebar-button"></i></p>
                                    <div id="generate-url-loader" class="ring-load"></div>
                                    <p> <i id="generate-url-and-run-button" title="Run Code and Generate IDE URL" lang="php" class="gfg-icon gfg-icon_link padding-2px code-sidebar-button generate-url-and-run-button"></i><br>
                                        <i title="Dark Mode" class="gfg-icon gfg-icon_dark-toggle padding-2px code-sidebar-button dark-editor-button"></i><br>
                                        <i id="edit-on-ide-button" title="Edit on IDE" lang="php" class="gfg-icon gfg-icon_code padding-2px code-sidebar-button edit-on-ide-button"></i>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <p></p>
                        </div>
                        <p></p>
                    </div>
                    <div class="code-container">
                        <div id="highlighter_399134" class="syntaxhighlighter nogutter  ">
                            <table border="1" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td class="code">
                                            <div class="container">
                                                <div class="line number1 index0 alt2"><code class="plain">&lt;?php&nbsp; </code></div>
                                                <div class="line number2 index1 alt1"><code class="keyword">class</code> <code class="plain">GeeksForGeeks</code></div>
                                                <div class="line number3 index2 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number4 index3 alt1"><code class="keyword">public</code> <code class="variable">$x</code> <code class="plain">= 100 ;&nbsp; # </code><code class="keyword">public</code> <code class="plain">attributes</code></div>
                                                <div class="line number5 index4 alt2"><code class="keyword">public</code> <code class="variable">$y</code> <code class="plain">= 50 ;&nbsp; </code></div>
                                                <div class="line number6 index5 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code> <code class="plain">add()&nbsp; </code></div>
                                                <div class="line number7 index6 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number8 index7 alt1"><code class="functions">echo</code> <code class="variable">$a</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;x + </code><code class="variable">$this</code><code class="plain">-&gt;y ; </code></div>
                                                <div class="line number9 index8 alt2"><code class="functions">echo</code> <code class="string">" "</code><code class="plain">;</code></div>
                                                <div class="line number10 index9 alt1"><code class="plain">}&nbsp; </code></div>
                                                <div class="line number11 index10 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}&nbsp;&nbsp;&nbsp;&nbsp; </code></div>
                                                <div class="line number12 index11 alt1"><code class="keyword">class</code> <code class="plain">child </code><code class="keyword">extends</code> <code class="plain">GeeksForGeeks </code></div>
                                                <div class="line number13 index12 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number14 index13 alt1"><code class="keyword">function</code> <code class="plain">sub()&nbsp; </code></div>
                                                <div class="line number15 index14 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number16 index15 alt1"><code class="functions">echo</code> <code class="variable">$s</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;x - </code><code class="variable">$this</code><code class="plain">-&gt;y ;&nbsp; </code></div>
                                                <div class="line number17 index16 alt2"><code class="plain">}&nbsp; </code></div>
                                                <div class="line number18 index17 alt1"><code class="undefined spaces">&nbsp;&nbsp;</code>&nbsp;</div>
                                                <div class="line number19 index18 alt2"><code class="plain">}&nbsp;&nbsp;&nbsp; </code></div>
                                                <div class="line number20 index19 alt1">&nbsp;</div>
                                                <div class="line number21 index20 alt2"><code class="variable">$obj</code> <code class="plain">= </code><code class="keyword">new</code> <code class="plain">child;&nbsp; </code></div>
                                                <div class="line number22 index21 alt1">&nbsp;</div>
                                                <div class="line number23 index22 alt2"><code class="comments">// It will return the addition result</code></div>
                                                <div class="line number24 index23 alt1"><code class="variable">$obj</code><code class="plain">-&gt;add() ;&nbsp; </code></div>
                                                <div class="line number25 index24 alt2">&nbsp;</div>
                                                <div class="line number26 index25 alt1"><code class="comments">// It's a derived class of the main class,</code></div>
                                                <div class="line number27 index26 alt2"><code class="comments">// which has a public object and therefore can be</code></div>
                                                <div class="line number28 index27 alt1"><code class="comments">// accessed, returning the subtracted result.</code></div>
                                                <div class="line number29 index28 alt2"><code class="variable">$obj</code><code class="plain">-&gt;sub() ; </code></div>
                                                <div class="line number30 index29 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code>&nbsp;</div>
                                                <div class="line number31 index30 alt2"><code class="plain">?&gt;&nbsp; </code></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="code-editor-container"></div>
                    <p></p>
                </div>
                <div class="code-output-container">
                    <div class="output-block">
                        <i id="output-icon" title="Output" class="gfg-icon gfg-icon_arrow-right-editor padding-2px code-sidebar-button output-icon"></i>
                        <p></p>
                        <pre class="output-pre"></pre>
                        <p></p>
                    </div>
                    <div class="ide-link-div">
                        <i id="copy-url-button" title="Copy Generated Ide URL" class="gfg-icon gfg-icon_copy padding-2px code-sidebar-button copy-url-button"></i>
                        <p></p>
                        <pre id="ide-url"></pre>
                        <p></p>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <ul>
            <li><strong>Output:</strong>&nbsp;<br>&nbsp;</li>
        </ul>
        <pre>150 50</pre>
        <ul>
            <li><strong>Example 2:</strong> In this example, we will see the Private Access Specifier&nbsp;<br>&nbsp;</li>
        </ul>
        <div class="responsive-tabs">
            <h2 class="tabtitle">php</h2>
            <div class="tabcontent">

                <div class="code-block">
                    <div class="code-gutter">
                        <div class="editor-buttons-container">
                            <div class="editor-buttons">
                                <div class="editor-buttons-div" title="Run and Edit">
                                    <i id="copy-code-button" title="Copy Code" class="gfg-icon gfg-icon_copy code-sidebar-button padding-2px copy-code-button"></i>
                                    <p></p>
                                    <div id="run-and-edit-loader" class="ring-load"></div>
                                    <p> <i id="run-and-edit-button" title="Edit Code" lang="php" class="gfg-icon gfg-icon_edit_1 padding-2px code-sidebar-button"></i><br>
                                        <i id="close-code-editor-button" title="Close Editor" class="gfg-icon gfg-icon_close-editor padding-2px code-sidebar-button close-code-editor-button"></i>
                                    </p>
                                    <div id="run-code-loader" class="ring-load"></div>
                                    <p> <i id="run-code-button" lang="php" title="Run Code and See Output" class="gfg-icon gfg-icon_play padding-2px code-sidebar-button"></i></p>
                                    <div id="generate-url-loader" class="ring-load"></div>
                                    <p> <i id="generate-url-and-run-button" title="Run Code and Generate IDE URL" lang="php" class="gfg-icon gfg-icon_link padding-2px code-sidebar-button generate-url-and-run-button"></i><br>
                                        <i title="Dark Mode" class="gfg-icon gfg-icon_dark-toggle padding-2px code-sidebar-button dark-editor-button"></i><br>
                                        <i id="edit-on-ide-button" title="Edit on IDE" lang="php" class="gfg-icon gfg-icon_code padding-2px code-sidebar-button edit-on-ide-button"></i>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <p></p>
                        </div>
                        <p></p>
                    </div>
                    <div class="code-container">
                        <div id="highlighter_255972" class="syntaxhighlighter nogutter  ">
                            <table border="1" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td class="code">
                                            <div class="container">
                                                <div class="line number1 index0 alt2"><code class="plain">&lt;?php&nbsp; </code></div>
                                                <div class="line number2 index1 alt1"><code class="keyword">class</code> <code class="plain">GeeksForGeeks</code></div>
                                                <div class="line number3 index2 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number4 index3 alt1"><code class="keyword">private</code> <code class="variable">$a</code> <code class="plain">= 75 ;&nbsp; # </code><code class="keyword">private</code> <code class="plain">attributes</code></div>
                                                <div class="line number5 index4 alt2"><code class="keyword">private</code> <code class="variable">$b</code> <code class="plain">= 5 ;&nbsp; </code></div>
                                                <div class="line number6 index5 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">private</code> <code class="keyword">function</code> <code class="plain">div()&nbsp; # </code><code class="keyword">private</code> <code class="plain">member </code><code class="keyword">function</code></div>
                                                <div class="line number7 index6 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number8 index7 alt1"><code class="functions">echo</code> <code class="variable">$d</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;a / </code><code class="variable">$this</code><code class="plain">-&gt;b ; </code></div>
                                                <div class="line number9 index8 alt2"><code class="functions">echo</code> <code class="string">" "</code><code class="plain">;</code></div>
                                                <div class="line number10 index9 alt1"><code class="plain">}&nbsp; </code></div>
                                                <div class="line number11 index10 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}&nbsp;&nbsp;&nbsp;&nbsp; </code></div>
                                                <div class="line number12 index11 alt1"><code class="keyword">class</code> <code class="plain">child </code><code class="keyword">extends</code> <code class="plain">GeeksForGeeks </code></div>
                                                <div class="line number13 index12 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number14 index13 alt1"><code class="keyword">function</code> <code class="plain">mul()&nbsp; </code></div>
                                                <div class="line number15 index14 alt2"><code class="plain">{&nbsp; </code></div>
                                                <div class="line number16 index15 alt1"><code class="functions">echo</code> <code class="variable">$m</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;a * </code><code class="variable">$this</code><code class="plain">-&gt;b ;&nbsp; </code></div>
                                                <div class="line number17 index16 alt2"><code class="plain">}&nbsp; </code></div>
                                                <div class="line number18 index17 alt1"><code class="undefined spaces">&nbsp;&nbsp;</code>&nbsp;</div>
                                                <div class="line number19 index18 alt2"><code class="plain">}&nbsp;&nbsp;&nbsp; </code></div>
                                                <div class="line number20 index19 alt1">&nbsp;</div>
                                                <div class="line number21 index20 alt2"><code class="variable">$obj</code><code class="plain">= </code><code class="keyword">new</code> <code class="plain">child;&nbsp; </code></div>
                                                <div class="line number22 index21 alt1">&nbsp;</div>
                                                <div class="line number23 index22 alt2"><code class="comments">// It's supposed to return the division result </code></div>
                                                <div class="line number24 index23 alt1"><code class="comments">// but since the data and function are private</code></div>
                                                <div class="line number25 index24 alt2"><code class="comments">// they can't be accessed by a derived class </code></div>
                                                <div class="line number26 index25 alt1"><code class="comments">// which will lead to fatal error .</code></div>
                                                <div class="line number27 index26 alt2"><code class="variable">$obj</code><code class="plain">-&gt;div(); </code></div>
                                                <div class="line number28 index27 alt1">&nbsp;</div>
                                                <div class="line number29 index28 alt2"><code class="comments">// It's a derived class of the main class,</code></div>
                                                <div class="line number30 index29 alt1"><code class="comments">// which's accessing the private data </code></div>
                                                <div class="line number31 index30 alt2"><code class="comments">// which again will lead to fatal error .</code></div>
                                                <div class="line number32 index31 alt1"><code class="variable">$obj</code><code class="plain">-&gt;mul(); </code></div>
                                                <div class="line number33 index32 alt2"><code class="plain">?&gt;&nbsp; </code></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="code-editor-container"></div>
                    <p></p>
                </div>
                <div class="code-output-container">
                    <div class="output-block">
                        <i id="output-icon" title="Output" class="gfg-icon gfg-icon_arrow-right-editor padding-2px code-sidebar-button output-icon"></i>
                        <p></p>
                        <pre class="output-pre"></pre>
                        <p></p>
                    </div>
                    <div class="ide-link-div">
                        <i id="copy-url-button" title="Copy Generated Ide URL" class="gfg-icon gfg-icon_copy padding-2px code-sidebar-button copy-url-button"></i>
                        <p></p>
                        <pre id="ide-url"></pre>
                        <p></p>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <ul>
            <li><strong>Output:</strong>&nbsp;<br>&nbsp;</li>
        </ul>
        <pre>PHP Fatal error:  Uncaught Error: Call to private method 
            GeeksForGeeks::div() from context '' in /home/cg/root/8030907/
            main.php:22 Stack trace:#0 {main} thrown in /home/cg/root/8030907/
            main.php on line 22</pre>
        <ul>
            <li><strong>Example 3:</strong> In this example, we will see the Protected Access Specifier.&nbsp;<br>&nbsp;</li>
        </ul>
        <div class="responsive-tabs">
            <h2 class="tabtitle">php</h2>
            <div class="tabcontent">

                <div class="code-block">
                    <div class="code-gutter">
                        <div class="editor-buttons-container">
                            <div class="editor-buttons">
                                <div class="editor-buttons-div" title="Run and Edit">
                                    <i id="copy-code-button" title="Copy Code" class="gfg-icon gfg-icon_copy code-sidebar-button padding-2px copy-code-button"></i>
                                    <p></p>
                                    <div id="run-and-edit-loader" class="ring-load"></div>
                                    <p> <i id="run-and-edit-button" title="Edit Code" lang="php" class="gfg-icon gfg-icon_edit_1 padding-2px code-sidebar-button"></i><br>
                                        <i id="close-code-editor-button" title="Close Editor" class="gfg-icon gfg-icon_close-editor padding-2px code-sidebar-button close-code-editor-button"></i>
                                    </p>
                                    <div id="run-code-loader" class="ring-load"></div>
                                    <p> <i id="run-code-button" lang="php" title="Run Code and See Output" class="gfg-icon gfg-icon_play padding-2px code-sidebar-button"></i></p>
                                    <div id="generate-url-loader" class="ring-load"></div>
                                    <p> <i id="generate-url-and-run-button" title="Run Code and Generate IDE URL" lang="php" class="gfg-icon gfg-icon_link padding-2px code-sidebar-button generate-url-and-run-button"></i><br>
                                        <i title="Dark Mode" class="gfg-icon gfg-icon_dark-toggle padding-2px code-sidebar-button dark-editor-button"></i><br>
                                        <i id="edit-on-ide-button" title="Edit on IDE" lang="php" class="gfg-icon gfg-icon_code padding-2px code-sidebar-button edit-on-ide-button"></i>
                                    </p>
                                </div>
                                <p></p>
                            </div>
                            <p></p>
                        </div>
                        <p></p>
                    </div>
                    <div class="code-container">
                        <div id="highlighter_450850" class="syntaxhighlighter nogutter  ">
                            <table border="1" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td class="code">
                                            <div class="container">
                                                <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                                                <div class="line number2 index1 alt1"><code class="keyword">class</code> <code class="plain">GeeksForGeeks</code></div>
                                                <div class="line number3 index2 alt2"><code class="plain">{ </code></div>
                                                <div class="line number4 index3 alt1"><code class="keyword">protected</code> <code class="variable">$x</code> <code class="plain">= 1000 ; # </code><code class="keyword">protected</code> <code class="plain">attributes</code></div>
                                                <div class="line number5 index4 alt2"><code class="keyword">protected</code> <code class="variable">$y</code> <code class="plain">= 100 ; </code></div>
                                                <div class="line number6 index5 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">function</code> <code class="plain">div() </code></div>
                                                <div class="line number7 index6 alt2"><code class="plain">{ </code></div>
                                                <div class="line number8 index7 alt1"><code class="functions">echo</code> <code class="variable">$d</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;x / </code><code class="variable">$this</code><code class="plain">-&gt;y ; </code></div>
                                                <div class="line number9 index8 alt2"><code class="functions">echo</code> <code class="string">" "</code><code class="plain">;</code></div>
                                                <div class="line number10 index9 alt1"><code class="plain">} </code></div>
                                                <div class="line number11 index10 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="plain">}&nbsp;&nbsp;&nbsp;&nbsp; </code></div>
                                                <div class="line number12 index11 alt1"><code class="keyword">class</code> <code class="plain">child </code><code class="keyword">extends</code> <code class="plain">GeeksForGeeks </code></div>
                                                <div class="line number13 index12 alt2"><code class="plain">{ </code></div>
                                                <div class="line number14 index13 alt1"><code class="keyword">function</code> <code class="plain">sub() </code></div>
                                                <div class="line number15 index14 alt2"><code class="plain">{ </code></div>
                                                <div class="line number16 index15 alt1"><code class="functions">echo</code> <code class="variable">$s</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;x - </code><code class="variable">$this</code><code class="plain">-&gt;y ; </code></div>
                                                <div class="line number17 index16 alt2"><code class="plain">} </code></div>
                                                <div class="line number18 index17 alt1">&nbsp;</div>
                                                <div class="line number19 index18 alt2"><code class="plain">} </code></div>
                                                <div class="line number20 index19 alt1"><code class="keyword">class</code> <code class="plain">derived # Outside Class</code></div>
                                                <div class="line number21 index20 alt2"><code class="plain">{ </code></div>
                                                <div class="line number22 index21 alt1"><code class="keyword">function</code> <code class="plain">mul()</code></div>
                                                <div class="line number23 index22 alt2"><code class="plain">{</code></div>
                                                <div class="line number24 index23 alt1"><code class="functions">echo</code> <code class="variable">$m</code> <code class="plain">= </code><code class="variable">$this</code><code class="plain">-&gt;x * </code><code class="variable">$this</code><code class="plain">-&gt;y ;</code></div>
                                                <div class="line number25 index24 alt2"><code class="plain">}</code></div>
                                                <div class="line number26 index25 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code>&nbsp;</div>
                                                <div class="line number27 index26 alt2"><code class="plain">}</code></div>
                                                <div class="line number28 index27 alt1"><code class="variable">$obj</code><code class="plain">= </code><code class="keyword">new</code> <code class="plain">child; </code></div>
                                                <div class="line number29 index28 alt2">&nbsp;</div>
                                                <div class="line number30 index29 alt1"><code class="comments">// It will return the division result</code></div>
                                                <div class="line number31 index30 alt2"><code class="variable">$obj</code><code class="plain">-&gt;div();</code></div>
                                                <div class="line number32 index31 alt1">&nbsp;</div>
                                                <div class="line number33 index32 alt2"><code class="comments">// Since it's a derived class of the main class,</code></div>
                                                <div class="line number34 index33 alt1"><code class="variable">$obj</code><code class="plain">-&gt;sub();</code></div>
                                                <div class="line number35 index34 alt2">&nbsp;</div>
                                                <div class="line number36 index35 alt1"><code class="comments">// Since it's an outside class, therefore it</code></div>
                                                <div class="line number37 index36 alt2"><code class="comments">// will produce a fatal error .</code></div>
                                                <div class="line number38 index37 alt1"><code class="variable">$obj</code><code class="plain">-&gt;mul();</code></div>
                                                <div class="line number39 index38 alt2">&nbsp;</div>
                                                <div class="line number40 index39 alt1"><code class="plain">?&gt; </code></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="code-editor-container"></div>
                    <p></p>
                </div>
                <div class="code-output-container">
                    <div class="output-block">
                        <i id="output-icon" title="Output" class="gfg-icon gfg-icon_arrow-right-editor padding-2px code-sidebar-button output-icon"></i>
                        <p></p>
                        <pre class="output-pre"></pre>
                        <p></p>
                    </div>
                    <div class="ide-link-div">
                        <i id="copy-url-button" title="Copy Generated Ide URL" class="gfg-icon gfg-icon_copy padding-2px code-sidebar-button copy-url-button"></i>
                        <p></p>
                        <pre id="ide-url"></pre>
                        <p></p>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <ul>
            <li><strong>Output :</strong>&nbsp;<br>&nbsp;</li>
        </ul>
        <pre>10
            900
            Fatal error:  Uncaught Error: Call to undefined method 
            child::mul() in /home/cg/root/8030907/main.php:32</pre>
        <p>&nbsp;</p>
        <div id="_GFG_ABP_Incontent_728x90" style="text-align:center;"></div>
        <div style="min-height:280px;text-align:center;margin:20px 0;max-height: 280px;" id="GFG_AD_InContent_Desktop_728x280" data-google-query-id="CMTPlcGC7oIDFYaESwUdpgkFeg">
            <div id="google_ads_iframe_/27823234/GFG_InContent_Desktop_728x280_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/27823234/GFG_InContent_Desktop_728x280_0" name="google_ads_iframe_/27823234/GFG_InContent_Desktop_728x280_0" title="3rd party ad content" width="650" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="1"></iframe></div>
        </div>
        <br>

    </div>
</body>

</html>

<?php
class Books
{
    public $PublicDM = "PublicDM";
    private $PrivateDM = "PrivateDM";
    protected $ProtectedDM = "ProtectedDM";
    public function AccessDM()
    {
        echo "<br>Public DM ", $this->PublicDM;
        echo "<br>Private DM ", $this->PrivateDM;
        echo "<br>Protected DM ", $this->ProtectedDM;
    }
}
class Details extends Books
{
    public function AccessDMFromChild()
    {
        echo "Public DM ", $this->PublicDM;
        echo "<br>";
        // echo "Private DM ",$this->PrivateDM; //Undefined property: Details::$PrivateDM in.
        echo "<br>";
        echo "Protected DM ", $this->ProtectedDM;
    }
}
$objectOf = new Details;
echo $objectOf->AccessDM();
// echo $objectOf->PublicDM;
echo "<br>";
// echo $objectOf->PrivateDM; Cannot access private property
echo "<br>";
// echo $objectOf->ProtectedDM; Cannot access protected property
?>