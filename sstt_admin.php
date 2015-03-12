<?php 
?>
  <div class="sstt-admin">
    <h1 class="sstt-admin__title">Instructions</h1>

    <div class="sstt-admin__instruction__wrapper">
      <h2 class="sstt-admin__subtitle">Shortcodes</h2>

      <div class="sstt-admin__instruction">
        <h3>Wraps for all tabbed content nav items.</h3>
        <p>[sstt_nav] [/sstt_nav]</p>
      </div>
      
      <div class="sstt-admin__instruction">
        <h3>Individual Tab Nav Item</h3>
        <p>tab_text is the text you see in the tab nav. tab_id is the id that will tie the nav item to its content.</p>
        <p>[sstt_nav_title tab_text="TAB_NAV_TEXT" tab_id="TAB_ID"]</p>
      </div>

      <div class="sstt-admin__instruction">
        <h3>Wrapper for all sstt__content containers</h3>
        <p>[sstt_content_wrapper] [/sstt_content_wrapper]</p>
      </div>
      
      <div class="sstt-admin__instruction">
        <h3>Individual Tab Content Container</h3>
        <p>tab_id tab_id is the id that will tie the content to its nav item</p>
        <p>[sstt_content tab_id="TAB_ID"] [/sstt_content]</p>
      </div>
    </div>

    <div class="sstt-admin__example">
      <h2 class="sstt-admin__subtitle">Usage Example</h2>
      <pre class="sstt-admin__code-block">
        <span class="sstt-admin__scode">[sstt_nav]</span>
          <span class="sstt-admin__scode">[accordion_title]</span>
          <span class="sstt-admin__scode">[sstt_nav_title tab_text="Tab 1" tab_id="tab1"]</span>
          <span class="sstt-admin__scode">[sstt_nav_title tab_text="Tab 2" tab_id="tab2"]</span>
          <span class="sstt-admin__scode">[sstt_nav_title tab_text="Tab 3" tab_id="tab3"]</span>
        <span class="sstt-admin__scode">[/sstt_nav]</span>
        <span class="sstt-admin__scode">[sstt_content_wrapper]</span>
          <span class="sstt-admin__scode">[sstt_content tab_id="tab1"]</span>
            &lt;h2&gt;Tab 1 Title&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
          <span class="sstt-admin__scode">[/sstt_content]</span>
          <span class="sstt-admin__scode">[sstt_content tab_id="tab2"]</span>
            &lt;h2&gt;Tab 2 Title&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
          <span class="sstt-admin__scode">[/sstt_content]</span>
          <span class="sstt-admin__scode">[sstt_content tab_id="tab3"]</span>
            &lt;h2&gt;Tab 3 Title&lt;/h2&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
          <span class="sstt-admin__scode">[/sstt_content]</span>
        <span class="sstt-admin__scode">[/sstt_content_wrapper]</span>
      </pre>
    </div>
  </div>