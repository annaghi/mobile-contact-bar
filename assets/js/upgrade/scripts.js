/*!
 * Mobile Contact Bar 3.0.4 by Anna Bansaghi - http://mobilecontactbar.com
 * License GPL-2.0 - https://www.gnu.org/licenses/gpl-2.0.en.html
 */

(function ($, document) {
    "use strict";

    $(document).ready(function () {
        $("#mcb-table-contacts")
            .find('input[name$="[icon]"][value=""]')
            .each(function () {
                $(this).closest("tr").addClass("mcb-warning");
            });
    });
})(jQuery, document);
