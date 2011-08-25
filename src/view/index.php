<?php include( 'header.php' ); ?>
<div class="container" id="overview" >

<div class="row">
	<div class="span8 columns">
        <h1>Overview</h1>
        <p>Custom Post Types are about Implementation, not registration.  This tool is designed to make the registration part easy.
        </p>
        <p>To use this tool, fill out the fields below.  Some will be auto populated for you.  When you get to the bottom, click "Generate" and your code will be created for you.  The URL will also be updated for you so you can easily share your selections or reuse them some other time.</p>
    </div>
	<div class="span6 columns offset2">
        <h4>"Create features, not post types"
        <small>- <a href="https://twitter.com/#!/themitcho">Mitcho</a></small></h4>
    </div>
</div>
<a id="form" class="section">&nbsp;</a>
<div class="row">
	<div id="center" class="span12 columns offset2">
	<form id="cptGeneratorForm" > 
	    <fieldset> 
	      <legend>Basics</legend> 
	      <div class="clearfix"> 
	        <label for="">X-Large Input</label> 
	        <div class="input"> 
	          <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text" /> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="">Select</label> 
	        <div class="input"> 
	          <select> 
	            <option>1</option> 
	            <option>2</option> 
	            <option>3</option> 
	            <option>4</option> 
	            <option>5</option> 
	          </select> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="">Select</label> 
	        <div class="input"> 
	          <select class="medium"> 
	            <option>1</option> 
	            <option>2</option> 
	            <option>3</option> 
	            <option>4</option> 
	            <option>5</option> 
	          </select> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label>Uneditable Input</label> 
	        <div class="input"> 
	          <span class="uneditable-input">Some Value Here</span> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="disabledInput">Disabled Input</label> 
	        <div class="input"> 
	          <input class="xlarge disabled" id="disabledInput" name="disabledInput" size="30" type="text" placeholder="Disabled input here… carry on." disabled /> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix error"> 
	        <label for="xlInput">X-Large Input</label> 
	        <div class="input"> 
	          <input class="xlarge error" id="xlInput" name="xlInput" size="30" type="text" /> 
	          <span class="help-inline">Small snippet of help text</span> 
	        </div> 
	      </div> <!-- /clearfix --> 
	    </fieldset> 
	    <fieldset> 
	      <legend>Example form legend</legend> 
	      <div class="clearfix"> 
	        <label for="prependedInput">Prepended Text</label> 
	        <div class="input"> 
	          <div class="input-prepend"> 
	            <span class="add-on">@</span> 
	            <input class="medium" id="prependedInput" name="prependedInput" size="16" type="text" /> 
	          </div> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="prependedInput2">Prepended Checkbox</label> 
	        <div class="input"> 
	          <div class="input-prepend"> 
	            <label class="add-on"><input type="checkbox" name="" id="" value="" /></label> 
	            <input class="mini" id="prependedInput2" name="prependedInput2" size="16" type="text" /> 
	          </div> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="appendedInput">Appended Checkbox</label> 
	        <div class="input"> 
	          <div class="input-append"> 
	            <input class="mini" id="appendedInput" name="appendedInput" size="16" type="text" /> 
	            <label class="add-on active"><input type="checkbox" name="" id="" value="" checked="checked" /></label> 
	          </div> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="xlInput">File Input</label> 
	        <div class="input"> 
	          <input class="input-file" id="fileInput" name="fileInput" type="file" /> 
	        </div> 
	      </div> <!-- /clearfix --> 
	    </fieldset> 
	    <fieldset> 
	      <legend>Example form legend</legend> 
	      <div class="clearfix"> 
	        <label id="optionsCheckboxes">List of Options</label> 
	        <div class="input"> 
	          <ul class="inputs-list"> 
	            <li> 
	              <label> 
	                <input type="checkbox" name="optionsCheckboxes" value="option1" /> 
	                <span>Option one is this and that&mdash;be sure to include why it’s great</span> 
	              </label> 
	            </li> 
	            <li> 
	              <label> 
	                <input type="checkbox" name="optionsCheckboxes" value="option2" /> 
	                <span>Option two can also be checked and included in form results</span> 
	              </label> 
	            </li> 
	            <li> 
	              <label> 
	                <input type="checkbox" name="optionsCheckboxes" value="option2" /> 
	                <span>Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</span> 
	              </label> 
	            </li> 
	            <li> 
	              <label class="disabled"> 
	                <input type="checkbox" name="optionsCheckboxes" value="option2" disabled /> 
	                <span>Option four cannot be checked as it is disabled.</span> 
	              </label> 
	            </li> 
	          </ul> 
	          <span class="help-block"> 
	            <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
	          </span> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label>Date Range</label> 
	        <div class="input"> 
	          <div class="inline-inputs"> 
	            <input class="small" type="text" value="May 1, 2011" /> 
	            <input class="mini" type="text" value="12:00am" /> 
	            to
	            <input class="small" type="text" value="May 8, 2011" /> 
	            <input class="mini" type="text" value="11:59pm" /> 
	            <span class="help-inline">All times are shown as Pacific Standard Time (GMT -08:00).</span> 
	          </div> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label for="textarea">Textarea</label> 
	        <div class="input"> 
	          <textarea class="xxlarge" id="textarea" name="textarea"></textarea> 
	          <span class="help-block"> 
	            Block of help text to describe the field above if need be.
	          </span> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="clearfix"> 
	        <label id="optionsRadio">List of Options</label> 
	        <div class="input"> 
	          <ul class="inputs-list"> 
	            <li> 
	              <label> 
	                <input type="checkbox" name="optionsCheckboxes" value="option1" /> 
	                <span>Option one is this and that&mdash;be sure to include why it’s great</span> 
	              </label> 
	            </li> 
	            <li> 
	              <label> 
	                <input type="checkbox" name="optionsCheckboxes" value="option2" /> 
	                <span>Option two can also be checked and included in form results</span> 
	              </label> 
	            </li> 
	          </ul> 
	        </div> 
	      </div> <!-- /clearfix --> 
	      <div class="actions"> 
	        <button type="submit" class="btn primary" id="generateBtn" >Generate</button> 
	        <button type="reset" class="btn">Cancel</button> 
	      </div> 
	    </fieldset> 
	  </form>
      <pre id="genCode">this is not new code</pre>
	</div>

</div>
<?php include( 'footer.php' ); ?>
