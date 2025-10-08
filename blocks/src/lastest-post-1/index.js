import { registerBlockType } from "@wordpress/blocks";
import Edit from "./edit";
import "./style.scss";

registerBlockType("hasantech-gb-blocks/latest-post-1", {
  edit: Edit,
  save: () => null,
});
