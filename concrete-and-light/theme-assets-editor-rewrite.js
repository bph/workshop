/**
 * Theme Assets Editor Rewrite
 *
 * This script rewrites URLs in block attributes that start with 'theme:./'
 * to point to the correct theme assets.
 * It allows blocks in templates to reference theme assets using relative paths in the editor.
**/
(function (wp) {
	const base = window.THEME_ASSETS_BASE_URL || '';
	const prefix = 'theme:./';

	if (!wp?.hooks || !wp?.compose) return;

	const rewrite = (url) => {
		if (typeof url === 'string' && url.startsWith(prefix)) {
			const path = url.slice(prefix.length);
			return base + '/' + path;
		}
		return null;
	};

	// Recursively walk any value and rewrite all theme:./ URLs found in it.
	// Returns a new structure if anything changed, or null if nothing changed.
	const deepRewrite = (value) => {
		if (typeof value === 'string') {
			return rewrite(value);
		}
		if (Array.isArray(value)) {
			let changed = false;
			const result = value.map((item) => {
				const rewritten = deepRewrite(item);
				if (rewritten !== null) {
					changed = true;
					return rewritten;
				}
				return item;
			});
			return changed ? result : null;
		}
		if (value && typeof value === 'object') {
			let changed = false;
			const result = {};
			for (const key of Object.keys(value)) {
				const rewritten = deepRewrite(value[key]);
				if (rewritten !== null) {
					changed = true;
					result[key] = rewritten;
				} else {
					result[key] = value[key];
				}
			}
			return changed ? result : null;
		}
		return null;
	};

	wp.hooks.addFilter(
		'editor.BlockEdit',
		'theme-assets/rewrite-image-urls',
		wp.compose.createHigherOrderComponent((BlockEdit) => (props) => {
			const { attributes } = props;

			// Deep-rewrite all attributes to resolve any theme:./ URLs
			const rewrittenAttributes = deepRewrite(attributes);

			// Pass rewritten URLs to BlockEdit for display only, without persisting changes
			if (rewrittenAttributes) {
				const modifiedProps = {
					...props,
					attributes: rewrittenAttributes,
				};
				return wp.element.createElement(BlockEdit, modifiedProps);
			}

			return wp.element.createElement(BlockEdit, props);
		}, 'withThemeAssetsRewrite')
	);

})(window.wp);