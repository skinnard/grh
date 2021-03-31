!function(e){function t(a){if(n[a])return n[a].exports;var r=n[a]={exports:{},id:a,loaded:!1};return e[a].call(r.exports,r,r.exports,t),r.loaded=!0,r.exports}var n={};return t.m=e,t.c=n,t.p="",t(0)}([function(e,t,n){"use strict";n(1);var a=window.fabricator={};a.options={toggles:{labels:!0,notes:!0,code:!1},menu:!1,mq:"(min-width: 60em)"},a.options.menu=window.matchMedia(a.options.mq).matches,a.test={},a.test.sessionStorage=function(){var e="_f";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(e){return!1}}(),a.test.sessionStorage&&(sessionStorage.fabricator=sessionStorage.fabricator||JSON.stringify(a.options)),a.dom={root:document.querySelector("html"),primaryMenu:document.querySelector(".f-menu"),menuItems:document.querySelectorAll(".f-menu li a"),menuToggle:document.querySelector(".f-menu-toggle")},a.getOptions=function(){return a.test.sessionStorage?JSON.parse(sessionStorage.fabricator):a.options},a.buildColorChips=function(){for(var e=document.querySelectorAll(".f-color-chip"),t=e.length-1;t>=0;t--){var n=e[t].querySelector(".f-color-chip__color").innerHTML;e[t].style.borderTopColor=n,e[t].style.borderBottomColor=n}return a},a.setActiveItem=function(){var e=function(){for(var e=window.location.pathname+window.location.hash,t=e.replace(/(^\/)([^#]+)?(#[\w\-\.]+)?$/gi,function(e,t,n,a){return(n||"")+(a||"").split(".")[0]})||"index.html",n=a.dom.menuItems.length-1;n>=0;n--){var r=a.dom.menuItems[n],i=r.getAttribute("href").replace(/^\//g,"");i===t?r.classList.add("f-active"):r.classList.remove("f-active")}};return window.addEventListener("hashchange",e),e(),a},a.menuToggle=function(){var e=a.dom.menuToggle,t=a.getOptions(),n=function(){t.menu=!a.dom.root.classList.contains("f-menu-active"),a.dom.root.classList.toggle("f-menu-active"),a.test.sessionStorage&&sessionStorage.setItem("fabricator",JSON.stringify(t))};document.onkeydown=function(e){e.ctrlKey&&e.keyCode==="M".charCodeAt(0)&&n()},e.addEventListener("click",function(){n()});for(var r=function(){window.matchMedia(a.options.mq).matches||n()},i=0;i<a.dom.menuItems.length;i++)a.dom.menuItems[i].addEventListener("click",r);return a},a.allItemsToggles=function(){for(var e={labels:document.querySelectorAll('[data-f-toggle="labels"]'),notes:document.querySelectorAll('[data-f-toggle="notes"]'),code:document.querySelectorAll('[data-f-toggle="code"]')},t=document.querySelectorAll(".f-controls [data-f-toggle-control]"),n=a.getOptions(),r=function(t,r){for(var i=document.querySelector(".f-controls [data-f-toggle-control="+t+"]"),o=e[t],s=0;s<o.length;s++)r?o[s].classList.remove("f-item-hidden"):o[s].classList.add("f-item-hidden");r?i.classList.add("f-active"):i.classList.remove("f-active"),n.toggles[t]=r,a.test.sessionStorage&&sessionStorage.setItem("fabricator",JSON.stringify(n))},i=0;i<t.length;i++)t[i].addEventListener("click",function(e){var t=e.currentTarget.getAttribute("data-f-toggle-control"),n=e.currentTarget.className.indexOf("f-active")<0;r(t,n)});return Object.keys(n.toggles).forEach(function(e){r(e,n.toggles[e])}),a},a.singleItemToggle=function(){for(var e=document.querySelectorAll(".f-item-group [data-f-toggle-control]"),t=function(e){var t=e.currentTarget.parentNode.parentNode.parentNode,n=e.currentTarget.getAttribute("data-f-toggle-control");t.querySelector("[data-f-toggle="+n+"]").classList.toggle("f-item-hidden")},n=0;n<e.length;n++)e[n].addEventListener("click",t);return a},a.bindCodeAutoSelect=function(){for(var e=document.querySelectorAll(".f-item-code"),t=function(e){var t=window.getSelection(),n=document.createRange();n.selectNodeContents(e.querySelector("code")),t.removeAllRanges(),t.addRange(n)},n=e.length-1;n>=0;n--)e[n].addEventListener("click",t.bind(void 0,e[n]))},a.setInitialMenuState=function(){var e=document.querySelector("html"),t=window.matchMedia(a.options.mq),n=function(t){t.matches&&a.getOptions().menu?e.classList.add("f-menu-active"):e.classList.remove("f-menu-active")};return t.addListener(n),n(t),a},a.setInitialMenuState().menuToggle().allItemsToggles().singleItemToggle().buildColorChips().setActiveItem().bindCodeAutoSelect()},function(e,t){(function(t){"use strict";var n="undefined"!=typeof window?window:"undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?self:{},a=function(){var e=/\blang(?:uage)?-(\w+)\b/i,t=0,a=n.Prism={manual:n.Prism&&n.Prism.manual,disableWorkerMessageHandler:n.Prism&&n.Prism.disableWorkerMessageHandler,util:{encode:function(e){return e instanceof r?new r(e.type,a.util.encode(e.content),e.alias):"Array"===a.util.type(e)?e.map(a.util.encode):e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ")},type:function(e){return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1]},objId:function(e){return e.__id||Object.defineProperty(e,"__id",{value:++t}),e.__id},clone:function(e){var t=a.util.type(e);switch(t){case"Object":var n={};for(var r in e)e.hasOwnProperty(r)&&(n[r]=a.util.clone(e[r]));return n;case"Array":return e.map(function(e){return a.util.clone(e)})}return e}},languages:{extend:function(e,t){var n=a.util.clone(a.languages[e]);for(var r in t)n[r]=t[r];return n},insertBefore:function(e,t,n,r){r=r||a.languages;var i=r[e];if(2==arguments.length){n=arguments[1];for(var o in n)n.hasOwnProperty(o)&&(i[o]=n[o]);return i}var s={};for(var l in i)if(i.hasOwnProperty(l)){if(l==t)for(var o in n)n.hasOwnProperty(o)&&(s[o]=n[o]);s[l]=i[l]}return a.languages.DFS(a.languages,function(t,n){n===r[e]&&t!=e&&(this[t]=s)}),r[e]=s},DFS:function(e,t,n,r){r=r||{};for(var i in e)e.hasOwnProperty(i)&&(t.call(e,i,e[i],n||i),"Object"!==a.util.type(e[i])||r[a.util.objId(e[i])]?"Array"!==a.util.type(e[i])||r[a.util.objId(e[i])]||(r[a.util.objId(e[i])]=!0,a.languages.DFS(e[i],t,i,r)):(r[a.util.objId(e[i])]=!0,a.languages.DFS(e[i],t,null,r)))}},plugins:{},highlightAll:function(e,t){var n={callback:t,selector:'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'};a.hooks.run("before-highlightall",n);for(var r,i=n.elements||document.querySelectorAll(n.selector),o=0;r=i[o++];)a.highlightElement(r,e===!0,n.callback)},highlightElement:function(t,r,i){for(var o,s,l=t;l&&!e.test(l.className);)l=l.parentNode;l&&(o=(l.className.match(e)||[,""])[1].toLowerCase(),s=a.languages[o]),t.className=t.className.replace(e,"").replace(/\s+/g," ")+" language-"+o,t.parentNode&&(l=t.parentNode,/pre/i.test(l.nodeName)&&(l.className=l.className.replace(e,"").replace(/\s+/g," ")+" language-"+o));var u=t.textContent,c={element:t,language:o,grammar:s,code:u};if(a.hooks.run("before-sanity-check",c),!c.code||!c.grammar)return c.code&&(a.hooks.run("before-highlight",c),c.element.textContent=c.code,a.hooks.run("after-highlight",c)),void a.hooks.run("complete",c);if(a.hooks.run("before-highlight",c),r&&n.Worker){var g=new Worker(a.filename);g.onmessage=function(e){c.highlightedCode=e.data,a.hooks.run("before-insert",c),c.element.innerHTML=c.highlightedCode,i&&i.call(c.element),a.hooks.run("after-highlight",c),a.hooks.run("complete",c)},g.postMessage(JSON.stringify({language:c.language,code:c.code,immediateClose:!0}))}else c.highlightedCode=a.highlight(c.code,c.grammar,c.language),a.hooks.run("before-insert",c),c.element.innerHTML=c.highlightedCode,i&&i.call(t),a.hooks.run("after-highlight",c),a.hooks.run("complete",c)},highlight:function(e,t,n){var i=a.tokenize(e,t);return r.stringify(a.util.encode(i),n)},matchGrammar:function(e,t,n,r,i,o,s){var l=a.Token;for(var u in n)if(n.hasOwnProperty(u)&&n[u]){if(u==s)return;var c=n[u];c="Array"===a.util.type(c)?c:[c];for(var g=0;g<c.length;++g){var d=c[g],m=d.inside,f=!!d.lookbehind,p=!!d.greedy,h=0,y=d.alias;if(p&&!d.pattern.global){var v=d.pattern.toString().match(/[imuy]*$/)[0];d.pattern=RegExp(d.pattern.source,v+"g")}d=d.pattern||d;for(var b=r,k=i;b<t.length;k+=t[b].length,++b){var S=t[b];if(t.length>e.length)return;if(!(S instanceof l)){d.lastIndex=0;var w=d.exec(S),A=1;if(!w&&p&&b!=t.length-1){if(d.lastIndex=k,w=d.exec(e),!w)break;for(var F=w.index+(f?w[1].length:0),x=w.index+w[0].length,L=b,O=k,I=t.length;I>L&&(x>O||!t[L].type&&!t[L-1].greedy);++L)O+=t[L].length,F>=O&&(++b,k=O);if(t[b]instanceof l||t[L-1].greedy)continue;A=L-b,S=e.slice(k,O),w.index-=k}if(w){f&&(h=w[1].length);var F=w.index+h,w=w[0].slice(h),x=F+w.length,q=S.slice(0,F),N=S.slice(x),j=[b,A];q&&(++b,k+=q.length,j.push(q));var C=new l(u,m?a.tokenize(w,m):w,y,w,p);if(j.push(C),N&&j.push(N),Array.prototype.splice.apply(t,j),1!=A&&a.matchGrammar(e,t,n,b,k,!0,u),o)break}else if(o)break}}}}},tokenize:function(e,t){var n=[e],r=t.rest;if(r){for(var i in r)t[i]=r[i];delete t.rest}return a.matchGrammar(e,n,t,0,0,!1),n},hooks:{all:{},add:function(e,t){var n=a.hooks.all;n[e]=n[e]||[],n[e].push(t)},run:function(e,t){var n=a.hooks.all[e];if(n&&n.length)for(var r,i=0;r=n[i++];)r(t)}}},r=a.Token=function(e,t,n,a,r){this.type=e,this.content=t,this.alias=n,this.length=0|(a||"").length,this.greedy=!!r};if(r.stringify=function(e,t,n){if("string"==typeof e)return e;if("Array"===a.util.type(e))return e.map(function(n){return r.stringify(n,t,e)}).join("");var i={type:e.type,content:r.stringify(e.content,t,n),tag:"span",classes:["token",e.type],attributes:{},language:t,parent:n};if(e.alias){var o="Array"===a.util.type(e.alias)?e.alias:[e.alias];Array.prototype.push.apply(i.classes,o)}a.hooks.run("wrap",i);var s=Object.keys(i.attributes).map(function(e){return e+'="'+(i.attributes[e]||"").replace(/"/g,"&quot;")+'"'}).join(" ");return"<"+i.tag+' class="'+i.classes.join(" ")+'"'+(s?" "+s:"")+">"+i.content+"</"+i.tag+">"},!n.document)return n.addEventListener?(a.disableWorkerMessageHandler||n.addEventListener("message",function(e){var t=JSON.parse(e.data),r=t.language,i=t.code,o=t.immediateClose;n.postMessage(a.highlight(i,a.languages[r],r)),o&&n.close()},!1),n.Prism):n.Prism;var i=document.currentScript||[].slice.call(document.getElementsByTagName("script")).pop();return i&&(a.filename=i.src,a.manual||i.hasAttribute("data-manual")||("loading"!==document.readyState?window.requestAnimationFrame?window.requestAnimationFrame(a.highlightAll):window.setTimeout(a.highlightAll,16):document.addEventListener("DOMContentLoaded",a.highlightAll))),n.Prism}();"undefined"!=typeof e&&e.exports&&(e.exports=a),"undefined"!=typeof t&&(t.Prism=a),a.languages.markup={comment:/<!--[\s\S]*?-->/,prolog:/<\?[\s\S]+?\?>/,doctype:/<!DOCTYPE[\s\S]+?>/i,cdata:/<!\[CDATA\[[\s\S]*?]]>/i,tag:{pattern:/<\/?(?!\d)[^\s>\/=$<]+(?:\s+[^\s>\/=]+(?:=(?:("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|[^\s'">=]+))?)*\s*\/?>/i,inside:{tag:{pattern:/^<\/?[^\s>\/]+/i,inside:{punctuation:/^<\/?/,namespace:/^[^\s>\/:]+:/}},"attr-value":{pattern:/=(?:("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|[^\s'">=]+)/i,inside:{punctuation:[/^=/,{pattern:/(^|[^\\])["']/,lookbehind:!0}]}},punctuation:/\/?>/,"attr-name":{pattern:/[^\s>\/]+/,inside:{namespace:/^[^\s>\/:]+:/}}}},entity:/&#?[\da-z]{1,8};/i},a.languages.markup.tag.inside["attr-value"].inside.entity=a.languages.markup.entity,a.hooks.add("wrap",function(e){"entity"===e.type&&(e.attributes.title=e.content.replace(/&amp;/,"&"))}),a.languages.xml=a.languages.markup,a.languages.html=a.languages.markup,a.languages.mathml=a.languages.markup,a.languages.svg=a.languages.markup,a.languages.css={comment:/\/\*[\s\S]*?\*\//,atrule:{pattern:/@[\w-]+?.*?(?:;|(?=\s*\{))/i,inside:{rule:/@[\w-]+/}},url:/url\((?:(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1|.*?)\)/i,selector:/[^{}\s][^{};]*?(?=\s*\{)/,string:{pattern:/("|')(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,greedy:!0},property:/[-_a-z\xA0-\uFFFF][-\w\xA0-\uFFFF]*(?=\s*:)/i,important:/\B!important\b/i,function:/[-a-z0-9]+(?=\()/i,punctuation:/[(){};:]/},a.languages.css.atrule.inside.rest=a.util.clone(a.languages.css),a.languages.markup&&(a.languages.insertBefore("markup","tag",{style:{pattern:/(<style[\s\S]*?>)[\s\S]*?(?=<\/style>)/i,lookbehind:!0,inside:a.languages.css,alias:"language-css"}}),a.languages.insertBefore("inside","attr-value",{"style-attr":{pattern:/\s*style=("|')(?:\\[\s\S]|(?!\1)[^\\])*\1/i,inside:{"attr-name":{pattern:/^\s*style/i,inside:a.languages.markup.tag.inside},punctuation:/^\s*=\s*['"]|['"]\s*$/,"attr-value":{pattern:/.+/i,inside:a.languages.css}},alias:"language-css"}},a.languages.markup.tag)),a.languages.clike={comment:[{pattern:/(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/,lookbehind:!0},{pattern:/(^|[^\\:])\/\/.*/,lookbehind:!0}],string:{pattern:/(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,greedy:!0},"class-name":{pattern:/((?:\b(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[\w.\\]+/i,lookbehind:!0,inside:{punctuation:/[.\\]/}},keyword:/\b(?:if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/,boolean:/\b(?:true|false)\b/,function:/[a-z0-9_]+(?=\()/i,number:/\b-?(?:0x[\da-f]+|\d*\.?\d+(?:e[+-]?\d+)?)\b/i,operator:/--?|\+\+?|!=?=?|<=?|>=?|==?=?|&&?|\|\|?|\?|\*|\/|~|\^|%/,punctuation:/[{}[\];(),.:]/},a.languages.javascript=a.languages.extend("clike",{keyword:/\b(?:as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|var|void|while|with|yield)\b/,number:/\b-?(?:0[xX][\dA-Fa-f]+|0[bB][01]+|0[oO][0-7]+|\d*\.?\d+(?:[Ee][+-]?\d+)?|NaN|Infinity)\b/,function:/[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*\()/i,operator:/-[-=]?|\+[+=]?|!=?=?|<<?=?|>>?>?=?|=(?:==?|>)?|&[&=]?|\|[|=]?|\*\*?=?|\/=?|~|\^=?|%=?|\?|\.{3}/}),a.languages.insertBefore("javascript","keyword",{regex:{pattern:/(^|[^\/])\/(?!\/)(\[[^\]\r\n]+]|\\.|[^\/\\\[\r\n])+\/[gimyu]{0,5}(?=\s*($|[\r\n,.;})]))/,lookbehind:!0,greedy:!0},"function-variable":{pattern:/[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*=\s*(?:function\b|(?:\([^()]*\)|[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*)\s*=>))/i,alias:"function"}}),a.languages.insertBefore("javascript","string",{"template-string":{pattern:/`(?:\\[\s\S]|[^\\`])*`/,greedy:!0,inside:{interpolation:{pattern:/\$\{[^}]+\}/,inside:{"interpolation-punctuation":{pattern:/^\$\{|\}$/,alias:"punctuation"},rest:a.languages.javascript}},string:/[\s\S]+/}}}),a.languages.markup&&a.languages.insertBefore("markup","tag",{script:{pattern:/(<script[\s\S]*?>)[\s\S]*?(?=<\/script>)/i,lookbehind:!0,inside:a.languages.javascript,alias:"language-javascript"}}),a.languages.js=a.languages.javascript}).call(t,function(){return this}())}]);