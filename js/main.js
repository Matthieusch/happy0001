"use strict";

var app = {
  // Properties
  version: 'v1.0.0',
  lang: 'français',
  timerStart: Date.now(),
  jQueryVersion : 'v1.9.1',

  // Vars
  jQuery: jQuery.noConflict(),

  // Debug
  debug: true,
  debugLoadMessages: [],
  debugEventMessages: [],

  functions: {},
  variables: {},

  // Initialisation
  init: function() {
    var self = this,
    $ = self.jQuery;

    // human.log
    if (!window.console) console = {log: function() {}};
    console.log('%cJavaScript informations\nversion: '+self.version + '\njQuery: '+self.jQueryVersion + '\nlang: '+self.lang + '\nauthor : www.matthieu-schneider.fr', 'color: #ae81bc');

    // Calculate time to load DOMready and everything loaded
    $(document).ready(function() {
      self.debugLoadMessages.push("Time until DOMready : " + (Date.now()-self.timerStart)/1000+"sec");

      // events.js
      // All events listeners
      self.functions.events();
    });
    $(window).load(function() {
      self.debugLoadMessages.push("Time until everything loaded : " + (Date.now()-self.timerStart)/1000+"sec");

      // All is loaded
      self.loaded();

      // Display debugLoadMessages
      if (self.debug) self.debugLoad(self.debugLoadMessages);
    });
  },

  // All is loaded
  loaded: function(){
    var self = this,
    $ = self.jQuery;

    /**
     * functions.js
     * @name: checkBrowser()
     * @desc: Check if the browser is too old and show a message
     * @cond: document.referrer == null || document.referrer.indexOf(window.location.hostname) < 0
     */
    if(document.referrer === null || document.referrer.indexOf(window.location.hostname) < 0)
      self.functions.checkBrowser();

    /**
     * functions.js
     * @name: renderMap()
     * @desc: render google custom maps
     */
    self.functions.renderMap();

    /**
     * functions.js
     * @name: placeholder()
     * @desc: Search placeholder fallback
     */
    // self.functions.placeholder($('#edit-key-words'));

    /**
     * functions.js
     * @name: konami()
     * @desc: Have fun right now
     */
    // self.functions.konami($('html'), 'shake');
  },

  // debugLoad
  debugLoad: function(messages) {
    console.log('%cDebug', 'color: #f92672');
    for(var key in messages){
      if(typeof messages[key] === 'object'){
        console.log(messages[key]);
      } else {
        console.log('%c→ '+messages[key], 'color: #fd971f');
      }
    }
    console.log('%cEnd', 'color: #f92672');
  },

  // debugEvent
  console: function(messages) {
    if(this.debug){
      var date = new Date();

      this.debugEventMessages.push(messages);

      console.clear();
      
      console.log('%cEvent - '+date.getHours()+'h'+date.getMinutes()+'mn'+date.getSeconds()+'s', 'color: #a6c628');
      for(var key in this.debugEventMessages){
        if(typeof this.debugEventMessages[key] === 'object'){
          console.log(this.debugEventMessages[key]);
        } else {
          console.log('%c→ '+this.debugEventMessages[key], 'color: #fd971f');
        }
      }
      console.log('%cEnd', 'color: #a6c628');
    } else {
      return;
    }
  }

};

app.init();