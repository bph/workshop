#!/bin/bash
# fix-attachment-urls.sh
# Replaces localhost wp:attachment_url references in a WXR XML file
# with GitHub raw URLs pointing to the media/ folder.
#
# Usage: ./scripts/fix-attachment-urls.sh <xml-file> [github-media-base-url]
#
# Default base URL: https://raw.githubusercontent.com/bph/workshop/main/media

set -euo pipefail

XML_FILE="${1:?Usage: $0 <xml-file> [github-media-base-url]}"
BASE_URL="${2:-https://raw.githubusercontent.com/bph/workshop/main/media}"

if [[ ! -f "$XML_FILE" ]]; then
  echo "Error: File not found: $XML_FILE"
  exit 1
fi

# Replace attachment_url lines: extract filename from localhost upload path,
# rewrite to BASE_URL/filename
sed -i '' -E "s|(<wp:attachment_url><!\[CDATA\[)http://localhost:[0-9]+/wp-content/uploads/[0-9]{4}/[0-9]{2}/([^]]+)(\]\]></wp:attachment_url>)|\1${BASE_URL}/\2\3|g" "$XML_FILE"

# Fix known missing files: St.-Francis.png -> St.Francis-mumbai-scaled.png
sed -i '' "s|${BASE_URL}/St.-Francis.png|${BASE_URL}/St.Francis-mumbai-scaled.png|g" "$XML_FILE"

echo "Done. Updated attachment_url entries in $XML_FILE"
echo ""
echo "Verification:"
grep -c "wp:attachment_url" "$XML_FILE" | xargs -I{} echo "  Total attachment_url lines: {}"
grep "wp:attachment_url.*localhost" "$XML_FILE" | wc -l | xargs -I{} echo "  Remaining localhost references: {}"
grep "wp:attachment_url.*${BASE_URL}" "$XML_FILE" | wc -l | xargs -I{} echo "  Updated to GitHub URLs: {}"
