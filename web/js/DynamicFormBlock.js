/*
Example template:
    | <div class="form-link-row" data-linkid="__local_id__"
    |     <div class="form-link-value">
    |          <input type="text" id="SiteBundle_appentry_links___name___url" name="SiteBundle_appentry[links][__name__][url]" required="required" maxlength="255" />
    |      </div>
    |      <div class="form-link-value">
    |          <input type="text" id="SiteBundle_appentry_links___name___description" name="SiteBundle_appentry[links][__name__][description]" required="required" maxlength="255" />
    |       </div>
    |      <div class="form-link-actions">
    |          <a onclick="__dfb_instance__.DeleteRow(\'__local_id__\');">Remove</a>
    |      </div>
    |  </div>

Template Key:
    "__name__" - Primary key as provided by server, or placehodler generated for new rows.

    "__dfb_instance__" - Variable name of the DFB instance.

    "__local_id__" - You don't need to specify this yourself anywhere; used internally for locally created rows; rows coming
                     from the server are generated automatically.
 */


var DynamicFormBlock = function ( options )
{
    this._options = {
        block_root:    null,              // Root element containing dynamic form rows
        // Row HTML template
        row_prototype: {
            dfb_instance: null,
            template:     null,
            template_id:  "__name__",        // Will be replaced by incrementing id #
            row_class:    ".form-link-row",  // Class attached to individual rows
            str_delete:   "Remove"           // Text for deletion link
        }
    };

    this._row_count = 0;

    for ( var opt in options ) {
        if (typeof options[ opt ] !== "object" )
            this._options[ opt ] = options[ opt ];
    }

    if ( !options.row_prototype ) {
        throw ("row_prototype not defined in DynamicFormBlock options");
    }

    for ( var opt in options.row_prototype ) {
        this._options.row_prototype[ opt ] = options.row_prototype[ opt ];
    }

    this.Init();
};

DynamicFormBlock.prototype.AddBlank = function ()
{
    this._row_count++;

    var new_link = this._options.row_prototype.template
                    .replace( /__name__/g, String( this._row_count ) )
                    .replace( /__local_id__/g, "LOCAL-" + this._row_count )
                    .replace( /__dfb_instance__/g, this._options.row_prototype.dfb_instance );

    $( this._options.block_root ).append( new_link );
};

DynamicFormBlock.prototype.DeleteRow = function(id)
{
    if ( confirm( "Delete this link?" ) )
    {
        var row = $( this._options.block_root ).find( ".form-link-row[data-linkid=" + id + "]" );
        row.remove();
    }
};

DynamicFormBlock.prototype.Init = function ()
{
    // Count the number of elements marked as cotaining a row prototype
    this._row_count = $( this._options.block_root ).find( this._options.row_prototype.row_class ).length;

    var self = this;
    // Attach action click events
    $( this._options.block_root ).find("[data-dfb-role=delete-row]" )
            .each(function(i,el)
            {
                $(el).click(function(){
                    self.DeleteRow( $(el).data('dfb-entity-id') );
                });

                $( el ).text( self._options.row_prototype.str_delete );

            });
}

