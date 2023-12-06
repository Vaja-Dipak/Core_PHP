<?php



$sub1 = 80;
$sub2 = 85;
$sub3 = 90;
$sub4 = 100;

$total = $sub1 + $sub2 + $sub3 + $sub4;
$Aveg = $total / 4;
$per = 450;

// if ($Aveg > 70) {
//     echo "Pass";
// }
// if ($Aveg > 70) {
//     echo "Pass";
// }else{
//     echo "try again";
// }


if ($per >= 0 && $per <= 100) {
    # code...

    if ($per >= 50) {
        // echo "Pass";
        if ($per >= 50 && $per < 60) {
            echo "Pass Cass";
        } else if ($per >= 60 && $per < 70) {
            echo "Second Class";
        } else if ($per >= 70 && $per < 80) {
            echo "First Class";
        } else if ($per >= 80 && $per < 90) {
            echo "Disct";
        } else if ($per >= 90 && $per <= 100) {
            echo "Dist+";
        }
    } else {
        echo "Try again";
    }
} else {
    echo "Invalid Marks";
}


echo "<br>";
$Lang = "1";
switch ($Lang) {
    case '1':
        echo "Language Choosen as Gujarati";
        break;
    case '2':
        echo "Language Choosen as Hindi";
        break;
    case '3':
        echo "Language Choosen as English";
        break;

    default:
        # code...
        break;
}
?>
<div class="text">
    <p>PHP allows us to perform actions based on some type of conditions that may be logical or comparative. Based on the result of these conditions i.e., either TRUE or FALSE, an action would be performed as asked by the user. It’s just like a two- way path. If you want something then go this way or else turn that way. To use this feature, PHP provides us with four conditional statements:</p>
    <ul>
        <li><strong>if</strong> statement</li>
        <li><strong>if…else</strong> statement</li>
        <li><strong>if…elseif…else</strong> statement</li>
        <li><strong>switch</strong> statement</li>
    </ul>
    <p>Let us now look at each one of these in details:</p>
    <div id="GFG_AD_gfg_mobile_336x280"></div>
    <ol>
        <li>
            <strong>if Statement</strong>: This statement allows us to set a condition. On being TRUE, the following block of code enclosed within the if clause will be executed. <p></p>
            <p><strong>Syntax </strong>:</p>
            <div id="_GFG_ABP_Incontent_728x90" style="text-align:center;"></div>
            <div style="min-height:280px;text-align:center;margin:20px 0;max-height: 280px;" id="GFG_AD_InContent_Desktop_728x280" data-google-query-id="CIPM9LW8k4IDFde6SwUdmXADXQ">
                <div id="google_ads_iframe_/27823234/GFG_InContent_Desktop_728x280_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/27823234/GFG_InContent_Desktop_728x280_0" name="google_ads_iframe_/27823234/GFG_InContent_Desktop_728x280_0" title="3rd party ad content" width="650" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="1"></iframe></div>
            </div>
            <pre>if (condition){
    // if TRUE then execute this code
}
</pre>
            <p>Example:</p>
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
                    <div id="highlighter_768717" class="syntaxhighlighter nogutter  ">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="code">
                                        <div class="container">
                                            <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                                            <div class="line number2 index1 alt1"><code class="variable">$x</code> <code class="plain">= 12; </code></div>
                                            <div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number4 index3 alt1"><code class="keyword">if</code> <code class="plain">(</code><code class="variable">$x</code> <code class="plain">&gt; 0) { </code></div>
                                            <div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"The number is positive"</code><code class="plain">; </code></div>
                                            <div class="line number6 index5 alt1"><code class="plain">} </code></div>
                                            <div class="line number7 index6 alt2"><code class="plain">?&gt; </code></div>
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
            <p>Output:</p>
            <pre>The number is positive
</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/if-statement-1.jpg" width="249" height="440" alt="" class="aligncenter size-full">
            </p>
        </li>
        <li>
            <strong>if…else Statement</strong>: We understood that if a condition will hold i.e., TRUE, then the block of code within if will be executed. But what if the condition is not TRUE and we want to perform an action? This is where else comes into play. If a condition is TRUE then if block gets executed, otherwise else block gets executed. <p></p>
            <div id="GFG_AD_Desktop_InContent_ATF_336x280" style="text-align:center;max-height: 280px;"></div>
            <p><strong>Syntax</strong>:</p>
            <pre>if (condition) {
    // if TRUE then execute this code
}
else{
    // if FALSE then execute this code
}
</pre>
            <p>Example:</p>
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
                    <div id="highlighter_452908" class="syntaxhighlighter nogutter  ">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="code">
                                        <div class="container">
                                            <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                                            <div class="line number2 index1 alt1"><code class="variable">$x</code> <code class="plain">= -12; </code></div>
                                            <div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number4 index3 alt1"><code class="keyword">if</code> <code class="plain">(</code><code class="variable">$x</code> <code class="plain">&gt; 0) { </code></div>
                                            <div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"The number is positive"</code><code class="plain">; </code></div>
                                            <div class="line number6 index5 alt1"><code class="plain">} </code></div>
                                            <div class="line number7 index6 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number8 index7 alt1"><code class="keyword">else</code><code class="plain">{ </code></div>
                                            <div class="line number9 index8 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"The number is negative"</code><code class="plain">; </code></div>
                                            <div class="line number10 index9 alt1"><code class="plain">} </code></div>
                                            <div class="line number11 index10 alt2"><code class="plain">?&gt; </code></div>
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
            <p>Output:</p>
            <pre>The number is negative
</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/if-else-1.jpg" width="316" height="440" alt="" class="aligncenter size-full">
            </p>
        </li>
        <li>
            <strong>if…elseif…else Statement</strong>: This allows us to use multiple if…else statements. We use this when there are multiple conditions of TRUE cases.<br>
            <strong>Syntax</strong>:<p></p>
            <pre>if (condition) {
    // if TRUE then execute this code
}
elseif {
    // if TRUE then execute this code
}
elseif {
    // if TRUE then execute this code
}
else {
    // if FALSE then execute this code
}
</pre>
            <p>Example:</p>
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
                    <div id="highlighter_319494" class="syntaxhighlighter nogutter  ">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="code">
                                        <div class="container">
                                            <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                                            <div class="line number2 index1 alt1"><code class="variable">$x</code> <code class="plain">= </code><code class="string">"August"</code><code class="plain">; </code></div>
                                            <div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number4 index3 alt1"><code class="keyword">if</code> <code class="plain">(</code><code class="variable">$x</code> <code class="plain">== </code><code class="string">"January"</code><code class="plain">) { </code></div>
                                            <div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Happy Republic Day"</code><code class="plain">; </code></div>
                                            <div class="line number6 index5 alt1"><code class="plain">} </code></div>
                                            <div class="line number7 index6 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number8 index7 alt1"><code class="keyword">elseif</code> <code class="plain">(</code><code class="variable">$x</code> <code class="plain">== </code><code class="string">"August"</code><code class="plain">) { </code></div>
                                            <div class="line number9 index8 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Happy Independence Day!!!"</code><code class="plain">; </code></div>
                                            <div class="line number10 index9 alt1"><code class="plain">} </code></div>
                                            <div class="line number11 index10 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number12 index11 alt1"><code class="keyword">else</code><code class="plain">{ </code></div>
                                            <div class="line number13 index12 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Nothing to show"</code><code class="plain">; </code></div>
                                            <div class="line number14 index13 alt1"><code class="plain">} </code></div>
                                            <div class="line number15 index14 alt2"><code class="plain">?&gt; </code></div>
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
            <p>Output:</p>
            <pre>Happy Independence Day!!!
</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/if-elseif-ladder-1.jpg" width="580" height="607" alt="" class="aligncenter size-full">
            </p>
        </li>
        <li>
            <strong>switch Statement</strong>: The “switch” performs in various cases i.e., it has various cases to which it matches the condition and appropriately executes a particular case block. It first evaluates an expression and then compares with the values of each case. If a case matches then the same case is executed. To use switch, we need to get familiar with two different keywords namely, <strong>break</strong> and <strong>default</strong>.<p></p>
            <ol>
                <li>The <strong>break</strong> statement is used to stop the automatic control flow into the next cases and exit from the switch case.</li>
                <li>The <strong>default</strong> statement contains the code that would execute if none of the cases match.</li>
            </ol>
            <p><strong>Syntax</strong>:</p>
            <pre>switch(n) {
    case statement1:
        code to be executed if n==statement1;
        break;
    case statement2:
        code to be executed if n==statement2;
        break;
    case statement3:
        code to be executed if n==statement3;
        break;
    case statement4:
        code to be executed if n==statement4;
        break;
    ......
    default:
        code to be executed if n != any case;

</pre>
            <p>Example:</p>
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
                    <div id="highlighter_86575" class="syntaxhighlighter nogutter  ">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="code">
                                        <div class="container">
                                            <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                                            <div class="line number2 index1 alt1"><code class="variable">$n</code> <code class="plain">= </code><code class="string">"February"</code><code class="plain">; </code></div>
                                            <div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                            <div class="line number4 index3 alt1"><code class="keyword">switch</code><code class="plain">(</code><code class="variable">$n</code><code class="plain">) { </code></div>
                                            <div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"January"</code><code class="plain">: </code></div>
                                            <div class="line number6 index5 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its January"</code><code class="plain">; </code></div>
                                            <div class="line number7 index6 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number8 index7 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"February"</code><code class="plain">: </code></div>
                                            <div class="line number9 index8 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its February"</code><code class="plain">; </code></div>
                                            <div class="line number10 index9 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number11 index10 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"March"</code><code class="plain">: </code></div>
                                            <div class="line number12 index11 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its March"</code><code class="plain">; </code></div>
                                            <div class="line number13 index12 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number14 index13 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"April"</code><code class="plain">: </code></div>
                                            <div class="line number15 index14 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its April"</code><code class="plain">; </code></div>
                                            <div class="line number16 index15 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number17 index16 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"May"</code><code class="plain">: </code></div>
                                            <div class="line number18 index17 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its May"</code><code class="plain">; </code></div>
                                            <div class="line number19 index18 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number20 index19 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"June"</code><code class="plain">: </code></div>
                                            <div class="line number21 index20 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its June"</code><code class="plain">; </code></div>
                                            <div class="line number22 index21 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number23 index22 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"July"</code><code class="plain">: </code></div>
                                            <div class="line number24 index23 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its July"</code><code class="plain">; </code></div>
                                            <div class="line number25 index24 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number26 index25 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"August"</code><code class="plain">: </code></div>
                                            <div class="line number27 index26 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its August"</code><code class="plain">; </code></div>
                                            <div class="line number28 index27 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number29 index28 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"September"</code><code class="plain">: </code></div>
                                            <div class="line number30 index29 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its September"</code><code class="plain">; </code></div>
                                            <div class="line number31 index30 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number32 index31 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"October"</code><code class="plain">: </code></div>
                                            <div class="line number33 index32 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its October"</code><code class="plain">; </code></div>
                                            <div class="line number34 index33 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number35 index34 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"November"</code><code class="plain">: </code></div>
                                            <div class="line number36 index35 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its November"</code><code class="plain">; </code></div>
                                            <div class="line number37 index36 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number38 index37 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">case</code> <code class="string">"December"</code><code class="plain">: </code></div>
                                            <div class="line number39 index38 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Its December"</code><code class="plain">; </code></div>
                                            <div class="line number40 index39 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">break</code><code class="plain">; </code></div>
                                            <div class="line number41 index40 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="keyword">default</code><code class="plain">: </code></div>
                                            <div class="line number42 index41 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"Doesn't exist"</code><code class="plain">; </code></div>
                                            <div class="line number43 index42 alt2"><code class="plain">} </code></div>
                                            <div class="line number44 index43 alt1"><code class="plain">?&gt; </code></div>
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
            <p>Output:</p>
            <div style="text-align:center;margin:20px 0;max-height: 280px;" id="GFG_AD_gfg_outstream_incontent" data-google-query-id="CIzOora8k4IDFXEAgwMde40Pfw">
                <div id="google_ads_iframe_/27823234/gfg_outstream_incontent_0__container__" style="border: 0pt none; display: inline-block; width: 336px; height: 280px;"><iframe frameborder="0" src="https://35257dbd02c0e38ab8d7a3c954a3d43b.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" id="google_ads_iframe_/27823234/gfg_outstream_incontent_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="1" height="1" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="attribution-reporting" role="region" aria-label="Advertisement" tabindex="0" data-google-container-id="4" style="border: 0px; vertical-align: bottom; width: 336px; height: 280px;" data-load-complete="true"></iframe></div>
            </div>
            <pre>Its February
</pre>
            <p><strong>Flowchart</strong>:<br>
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/switch-case.jpg" width="524" height="801" alt="" class="aligncenter size-full">
            </p>
        </li>
    </ol>
    <p align="center"><strong>Ternary Operators</strong></p>
    <p>In addition to all this conditional statements, PHP provides a shorthand way of writing if…else, called Ternary Operators. The statement uses a question mark (?) and a colon (:) and takes three operands: a condition to check, a result for TRUE and a result for FALSE.<br>
        <strong>Syntax</strong>:
    </p>
    <pre>(condition) ? if TRUE execute this : otherwise execute this;</pre>
    <p>Example:</p>
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
            <div id="highlighter_889140" class="syntaxhighlighter nogutter  ">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td class="code">
                                <div class="container">
                                    <div class="line number1 index0 alt2"><code class="plain">&lt;?php </code></div>
                                    <div class="line number2 index1 alt1"><code class="variable">$x</code> <code class="plain">= -12; </code></div>
                                    <div class="line number3 index2 alt2"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                    <div class="line number4 index3 alt1"><code class="keyword">if</code> <code class="plain">(</code><code class="variable">$x</code> <code class="plain">&gt; 0) { </code></div>
                                    <div class="line number5 index4 alt2"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"The number is positive \n"</code><code class="plain">; </code></div>
                                    <div class="line number6 index5 alt1"><code class="plain">} </code></div>
                                    <div class="line number7 index6 alt2"><code class="keyword">else</code> <code class="plain">{ </code></div>
                                    <div class="line number8 index7 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="functions">echo</code> <code class="string">"The number is negative \n"</code><code class="plain">; </code></div>
                                    <div class="line number9 index8 alt2"><code class="plain">} </code></div>
                                    <div class="line number10 index9 alt1"><code class="undefined spaces">&nbsp;</code>&nbsp;</div>
                                    <div class="line number11 index10 alt2"><code class="comments">// This whole lot can be written in a&nbsp; </code></div>
                                    <div class="line number12 index11 alt1"><code class="comments">// single line using ternary operator </code></div>
                                    <div class="line number13 index12 alt2"><code class="functions">echo</code> <code class="plain">(</code><code class="variable">$x</code> <code class="plain">&gt; 0) ? </code><code class="string">'The number is positive'</code> <code class="plain">:&nbsp; </code></div>
                                    <div class="line number14 index13 alt1"><code class="undefined spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="string">'The number is negative'</code><code class="plain">; </code></div>
                                    <div class="line number15 index14 alt2"><code class="plain">?&gt; </code></div>
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
    <p>Output:</p>
    <pre>The number is negative
The number is negative
</pre>
    <br>
</div>