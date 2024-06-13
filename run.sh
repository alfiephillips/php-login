#!/bin/bash

# Define the .htaccess file path
HTACCESS_FILE=".htaccess"
CONFIG_FILE="config/htaccess.txt"

# Check if the text file exists
if [ ! -f "$CONFIG_FILE" ]; then
    echo "Error: $CONFIG_FILE does not exist."
    exit 1
fi

# Check if a preexisting .htaccess file has already been configured
if [ -f "$HTACCESS_FILE" ]; then
    echo "Exiting, .htaccess already exists. Please remove using rm -rf .htaccess to reconfigure."
    exit 0
fi

# Create a temporary file to ensure the last line is read
TEMP_FILE=$(mktemp)
cp "$CONFIG_FILE" "$TEMP_FILE"
echo >> "$TEMP_FILE"

# Read text file line by line
count=0
while IFS= read -r line
do
    count=$((count+1))
    echo "Processing line No.${count}"

    # Append the line to the .htaccess file
    echo "$line" >> $HTACCESS_FILE
done < "$TEMP_FILE"

# Remove the temporary file
rm "$TEMP_FILE"

# Define the source pages directory
SRC_DIR="src/pages"

# Recursively find all .php files in the src/pages directory
find $SRC_DIR -type f -name "*.php" | while read -r FILE; do
    # Get the relative path from src/pages
    REL_PATH=${FILE#$SRC_DIR/}

    # Convert the path to the desired format starting with php-login/
    NEW_PATH="${REL_PATH%.php}"

    echo ${NEW_PATH}

    # Add the RewriteRule to the .htaccess file
    echo "# Test Documentation"
    echo "RewriteRule ^${NEW_PATH}$ $FILE [L]" >> $HTACCESS_FILE
done

echo ".htaccess file created successfully."