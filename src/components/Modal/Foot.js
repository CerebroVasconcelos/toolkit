/**
 * @copyright   2010-2016, The Titon Project
 * @license     http://opensource.org/licenses/BSD-3-Clause
 * @link        http://titon.io
 */

import React, { PropTypes } from 'react';
import Component from '../../Component';
import cssClass from '../../prop-types/cssClass';
import CONTEXT_TYPES from './ContextTypes';

export default class Foot extends Component {
    static contextTypes = CONTEXT_TYPES;

    static defaultProps = {
        className: ['modal', 'foot']
    };

    static propTypes = {
        children: PropTypes.node,
        className: cssClass.isRequired
    };

    /**
     * Render the modal inner foot.
     *
     * @returns {ReactElement}
     */
    render() {
        let props = this.props;

        return (
            <div
                className={this.formatClass(props.className)}
                {...this.inheritNativeProps(props)}>

                {props.children}
            </div>
        );
    }
}