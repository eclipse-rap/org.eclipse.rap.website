#!/bin/bash

COMPONENTS="clientscripting dropdown fileupload osgi-packaging nebula-grid cnf gef pde tabbed-properties visualization"
REPO_ROOT="$HOME/git"

echo '<?xml version="1.0" encoding="UTF-8"?>'
echo '<components>'
for component in $COMPONENTS; do
  file="$REPO_ROOT/org.eclipse.rap.incubator.$component/component.xml"
  cat "$file" | sed -e '/<\?xml/d' | sed -e "s/<component/<component id=\"$component\"/"
done
echo '</components>'

