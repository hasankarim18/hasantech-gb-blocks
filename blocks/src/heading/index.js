import { registerBlockType } from "@wordpress/blocks";
import Edit from "./edit";
import "./style.scss";

registerBlockType("gb-static/heading", {
  edit: Edit,
  save: () => null, // dynamic block
});
